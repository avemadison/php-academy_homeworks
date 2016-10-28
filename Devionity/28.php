<form action="index.php" method="POST">
    <fieldset>
        <legend>Пользовательские данные</legend>
    <p> Введите свое имя</p>
    <input type="text" name="userName">
    <p> Введите свою почту</p>
    <input type="email" name="userEmail">
    <p> Введите свой номер</p>
    <input type="tel" name="userPhone">
    </fieldset>
    <input type="submit"name="submit"value="Отправить">
</form>
<?php
    print_r($_POST);
?>