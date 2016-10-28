<?php
function dd($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
function post($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : null;
}
function get ($key)
{
    return isset($_GET[$key]) ? $_GET[$key] : null;
}
function getKey($func_name, $key){
    return $func_name ($key);
}
