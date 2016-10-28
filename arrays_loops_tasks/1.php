<!-- Работа с foreach-->
<!--1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.-->
<?php
$languages = ['html','css', 'php', 'js', 'jq'];
foreach ($languages as $language) {
    echo "{$language} <br>";
}