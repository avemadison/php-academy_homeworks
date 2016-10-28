<!--3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.-->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="a">Введите число:</label><br>
    <textarea name="a" id="a"></textarea><br>
    <button>Отправить</button>
</form>
</body>
</html>


<?php
include './functions/check_post_get.php';
$max_num = (int)getKey('post', 'a');
$file = file_get_contents('test.txt');


function number($file, $max_num)
{
    $arr = (explode(' ', $file));
    foreach ($arr as $key => $value)
    {
        if(mb_strlen($value, 'UTF-8') > $max_num)
        {
            unset($arr[$value]);
        }
    }
    file_put_contents('rewriteText.txt', implode(' ', $arr));
    echo "Файл успешно перезаписан. Слова, длина которых превышает $max_num символов удалены";
}
if($_POST)
{
    number($file,$max_num);
}
