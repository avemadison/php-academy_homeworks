<!--   Конструкция switch / case - Курс Изучаем PHP онлайн. Часть I от Devionity-->
<!--Создать алгоритм вычисления максимального значения двух переменных при помощи switch-->
<?php
$a = 5;
$b = 6;
switch ($a) {
    case 5 > 6:
        echo('5 > 6');
        break;
    case 5 < 6:
        echo('5 < 6');
        break;

    default: echo 'none of';
}