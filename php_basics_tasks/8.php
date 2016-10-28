<?php
<?php
$age = 18;
if($age >= 18 and $age <60) {
    echo "Вам еще работать и работать";}
elseif($age >= 60) {
    echo "Вам пора на пенсию";}
elseif($age >= 0 and $age < 18) {
    echo "Вам еще рано работать"; }
else {
    echo "Неизвестный возраст";
}
?>