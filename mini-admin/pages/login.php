<?php
 $salt = 'Some text';

require 'models/user.php';

// findUser('admin@adminka.com', $pass);

if (requestIsPost()) {
    if (loginFormIsValid()) {
        $user['username'] = post('username'); 
        $user['password'] = post('password');

        $pass = md5( md5($salt) . $user['password']);

        $user = findUser($user['username'], $pass);

        if ($user !== null) {
            $_SESSION['user'] = $user['email'];
            setFlash('Signed in');
            redirect('/index.php');
        }

        setFlash('User not found');
        redirect('/index.php?page=login');
    }
    setFlash('Fill the fields');
}
?>

<h1>Sign in</h1>
<form class="form-signin" method='post'>
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input value='<?=post('username')?>' name='username' type="text" id="inputEmail" class="form-control" placeholder="Email address"  autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name='password' type="password" id="inputPassword" class="form-control" placeholder="Password" >
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>