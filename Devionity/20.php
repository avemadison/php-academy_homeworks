<?php
/*  Многомерные массивы - Курс Изучаем PHP онлайн. Часть I от Devionity*/
$book1 = array('Author' => 'Franz Kafka', 'Title' => 'Metamorphosis', 'Price' => 242.5);
$book2 = array('Author' => 'George Orwell', 'Title' => '1984', 'Price' => 321);
$book3 = array('Author' => 'Charles Bukowski', 'Title' => 'Women', 'Price' => 222);
$book4 = array('Author' => 'Jack Kerouac', 'Title' => 'On the Road', 'Price' => 425);
$book5 = array('Author' => 'Victor Pelevin', 'Title' => 'Generation "П"', 'Price' => 169);
$all_books = array($book1, $book2, $book3, $book4, $book5);
echo '<pre>';
print_r($all_books);
echo '</pre>';