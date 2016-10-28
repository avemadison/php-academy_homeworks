<!-- 12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
что предложения идут в обратном порядке.<br>
Пример:
Входная строка: 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией : 'А там хоть трава не расти. А ларчик просто открывался.
А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.
А Васька слушает да ест.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форматирование предложения</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<h2>Reverse sentence</h2>
<form action="" method="post" class="form-group">
    <textarea class="form-control" rows="1" name="comment" placeholder="Enter string"></textarea>
    <br/>
    <button type="submit" class="btn btn-info">Go</button>
</form>
<?php
include 'functions/check_post_get.php';

function revSentence($a){
    if($_POST){
        $a=explode(".", $a);
        $b=array_reverse($a);

        return implode(". ", $b);
    }
}
$a=getKey('post', 'comment');
echo $a=revSentence($a);