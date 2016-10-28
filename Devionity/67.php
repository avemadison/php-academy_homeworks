<?php
/*Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre> .
В зависимости от значения второго аргумента функции, выводить
 используя var_dump или print_r. По умолчанию использовать print_r*/
function firstFunction ($a, $b = false)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    if ($b) {
         var_dump($b);
    }
};
$arr = [1,2,3];
firstFunction($arr);
$arr2 = [10,20,30];
firstFunction($arr2, true);
