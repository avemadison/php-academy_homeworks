<!--Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="a" placeholder='Enter value'></textarea>
    <button>Отправить</button>
</form>
</body>
</html>

<?php
include './functions/check_post_get.php';

$a = explode(' ', getKey('post', 'a'));
if ($_POST) {
    function top3($a)
    {
        foreach ($a as $key => $value)
        {
            $value = mb_strlen($value);
        }
        //arsort сортирует массив в обратном порядке, сохраняя ключи
        arsort($a);
        $temp[] = reset($a);
        $temp[] = next($a);
        $temp[] = next($a);
        return $temp;
    }
    dd(top3($a));
}