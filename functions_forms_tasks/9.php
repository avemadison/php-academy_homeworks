<!--9. Написать функцию, которая переворачивает строку.
Было "abcde", должна выдать "edcba".
Ввод текста реализовать с помощью формы. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<form  action="" method="post" class="form-group" >
    <textarea class="form-control" rows="3" name="comment" placeholder="Enter word"></textarea>
    <br/>
    <button type="submit" class="btn btn-success">Go</button>
</form>
</body>
</html>

<?php
require 'functions/check_post_get.php';

    function reverseWord (&$word)
    {
        if ($_POST) {
            $word = strrev($word);
            return $word;
        }
    }

$word = getKey('post', 'comment');
echo reverseWord($word).'<br>';
echo reverseWord($word);

