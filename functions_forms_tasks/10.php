<!--10. Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.-->
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
    <button type="submit" class="btn btn-info">Go</button>
</form>
</body>
</html>
<?php
require 'functions/function.php';
function unique($a)
{
    if($_POST){
        $a = array_unique(explode(' ', mb_strtolower($a)));
        echo 'Всего подсчитано уникальных слов - '.count($a);
    }
}
$a = getKey('post', 'comment');
unique($a);



