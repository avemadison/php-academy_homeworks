<!--4. Написать функцию, которая выводит список файлов в заданной директории.
Директория задается как параметр функции.-->
<form method='post'>
    <label for="a">Enter dir:</label>
    <textarea name='a' id="a"></textarea> <br>
    <button>Отправить</button>
</form>

<?php
include './functions/check_post_get.php';

$dir=getKey('post', 'a');

function fileDir($dir){
    if($dir==null){
        return scandir(__DIR__);
    }
    return scandir($dir);
}
if($_POST){
    dd(fileDir($dir));
}

//Variant 2

function show_dir($dir_name)
{
    $d = opendir($dir_name);       // . - текущая директория   .. - родительская
    while ($name = readdir($d)) {  //чтоб просмотреть все используем цикл. (readdir по одному элементу выводит)
        if ($name == "." or $name == "..")  //чтоб не выводить [.] и [..]
            continue;
        if (is_dir($name))         //Определяет, является ли имя файла директорией
            echo "<b>[$name]</b> - папка <br>";
        else
            echo "$name<br>";
    }
    closedir($d); // сразу пишем закрытие после открытия. чтоб не забыть
}
$dir_name = '.';
echo <<<  "HTML"
<pre>
 * 4. Написать функцию, которая выводит список файлов в заданной директории.
 * Директория задается как параметр функции.
<pre>
Выведем список в директории '{$dir_name}'
HTML;
show_dir($dir_name);
