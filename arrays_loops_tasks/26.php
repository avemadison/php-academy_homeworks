<?php
$rand_arr = [];
$composition = 1;
for ($i = 0; $i < 10; $i++) {
    array_push($rand_arr, rand(1, 100));
}
foreach ($rand_arr as $key => $value) {
    if ($value > 0 && $key % 2 == 0) {
        $composition *= $value;
    }
}
echo '<pre>';
//print_r($rand_arr);
echo 'Произведение: ' . $composition;
echo '<br>';
foreach ($rand_arr as $key => $value) {
    if ($key % 2 != 0) {
        echo $value . '<br>';
    }
}
echo '</pre>';