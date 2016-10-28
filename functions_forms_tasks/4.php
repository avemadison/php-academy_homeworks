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