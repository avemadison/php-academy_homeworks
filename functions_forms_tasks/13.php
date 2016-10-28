<!-- 13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко
 вишня вишня черешня черешня груша яблоко черешня вишня'
Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
Выведите  в виде списка в порядке уменьшения количества:
Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>  -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форматирование предложения</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<h2>Words count</h2>
<form action="" method="post" class="form-group">
    <textarea class="form-control" rows="1" name="comment" placeholder="Enter string"></textarea>
    <br/>
    <button type="submit" class="btn btn-danger">Go</button>
</form>

<?php
include_once 'functions/check_post_get.php';
function countWords($a){
    if($_POST){
        $b=array_unique(explode(" ", $a));
        $c=[];
        foreach ($b as $value){
            $c["$value"]=substr_count($a, $value);
        }
        arsort($c);
        foreach ($c as $key => $value){
            echo $key." - ".$value."<br>";
        }
    }
}
$a=getKey('post', 'comment');
countWords($a);