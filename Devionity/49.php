<!-- Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3-->
<?php
$numbers = array(9, 13, 15, 24, 26, 27, 30, 32, 45, 79);

foreach($numbers as $number) {
if($number % 3 == 0) {
echo $number.'<br>';
}
}
?>