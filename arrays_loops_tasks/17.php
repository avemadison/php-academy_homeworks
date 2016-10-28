<!-- Циклы while и for-->
<?php
/*17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
foreach ($months as $month) {
    if ($month == date('M')) {
        $month = "<b> {$month} </b>";
    }
    echo "{$month} <br>";
}

