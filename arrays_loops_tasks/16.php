<?php
/*25.16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9*/
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;
$str = '';
foreach ($arr as $elem){
    $str .= $elem.',';
    $i++;
    if($i % 3 == 0){
        $str = substr($str, 0, strlen($str) - 1);
        echo $str, '<br/>';
        $str = '';
        $i = 0;
    }
}