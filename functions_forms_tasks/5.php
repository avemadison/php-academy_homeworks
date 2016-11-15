<!--5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.-->
<form method='post'>
    <label for="a">Enter dir:</label><br>
    <textarea name='a' id="a"></textarea> <br>
    <label for="b">Enter word:</label><br>
    <textarea name='b' id="b"></textarea> <br>
    <button>Go</button>
</form>
<?php
include 'functions/check_post_get.php';
$dir=getKey('post', 'a');
$word=getKey('post', 'b');
function find_file($dir, $word){
    if($dir==null){
        $arr=(scandir(__DIR__));
    }else
        $arr=(scandir($dir));
    $res=[];
    if($word==null){
        $res[]="Введите слово для поиска";
        return $res;
    }
    foreach ($arr as $value){
        $temp=strpos($value,$word);
        if($temp!==false){
            $res[]=$value;
        }
    }
    if($res==null){
        $res[]="Такой файл не найден";
    }
    return $res;
}
if ($_POST){
    dd(find_file($dir,$word));
}

// Another variant

$dir = "1/";
$word = "index.php";
function checkFolder($dir,$word)
{
    $result = array();
    $files = scandir($dir);
    for($i = 0; $i< sizeof($files); $i++)
    {
        if($files[$i] === $word)
            array_push($result,$files[$i]);
    }
    return $result;
}
print_r (checkFolder($dir,$word));
