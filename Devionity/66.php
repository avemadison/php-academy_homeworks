<?php
/*Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>*/
function print_pre_array ($a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
};
$arr = [1,2,3];
print_pre_array($arr);
$arr2 = ['Hello world', 'Hello function'];
print_pre_array($arr2);