<?php
$rand_arr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($rand_arr, rand(-100, 100));
}
$min = array_keys($rand_arr, min($rand_arr))[0];
$max = array_keys($rand_arr, max($rand_arr))[0];
echo '<pre>';
print_r($rand_arr);
echo '<br>';
$x = $rand_arr[$min];
$rand_arr[$min] = $rand_arr[$max];
$rand_arr[$max] = $x;
print_r($rand_arr);
echo '</pre>';