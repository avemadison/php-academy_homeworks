<!-- Альтернативный синтаксис foreach-->
<?php
$numbers = array(9, 13, 15, 24, 26, 27, 30, 32, 45, 79);

foreach($numbers as $number) :
if($number % 3 == 0) :
echo $number.'<br>';
endif;
    endforeach;

?>