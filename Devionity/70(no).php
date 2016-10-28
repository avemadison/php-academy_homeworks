<?php
/*Реализовать функцию, которая определяет, будет ли число простым числом*/
function num($a)
{
    if ($a <= 1) {

        return false;

    }elseif ( (!($a % 2 == 0) &&  ($a % $a == 0)) || $a == 2 ) {

        echo "{$a} - простое число ";

    }else {

        return false;
    }
};
$a = rand(2,29);
num($a);
