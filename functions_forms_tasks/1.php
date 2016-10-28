<!--1 Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть
и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с
общими словами.-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method='post'>
    <textarea name='a' placeholder='Enter value...'></textarea> <br>
    <textarea name='b' placeholder='Enter value...'></textarea> <br>
    <button name="submit">Go</button>
</form>
</body>
</html>
<?php
include './functions/check_post_get.php';
//explode — Разбивает строку с помощью разделителя
$a=explode(' ', getKey ('post', 'a'));
$b=explode(' ', getKey('post','b'));
if($_POST){
    function getCommonWords($a, $b)
    {
        return array_intersect($a, $b);
        //array_intersect — Вычисляет схождение массивов
    }
    dd(getCommonWords($a, $b));
}
?>
