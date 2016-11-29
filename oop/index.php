<?php
/*1.Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.
2.Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин Toyota Corolla (2000), 
Mazda 6 (2015), Ford Taurus (1995). Создать экземпляры класса User для нескольких пользователей системы.
В свойство driver объектов класса Car записать объекты класса User. 
Вывести объекты класса Car на экран при помощи var_dump(), print_r() */
class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;
}
$mike = new User;
$chester = new User;
$max = new User;

$mike->login = 'Mike';
$mike->password = 12345;
$mike->email = 'mikedriv@gmail.com';

$chester->login = 'Chester';
$chester->password = 78096;
$chester->email = 'chesdriv@rambler.ru';

$max->login = 'Max';
$max->password = 54687;
$max->email = 'maxdriv@mail.ru';

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
}
$car1 = new Car;
$car2 = new Car;
$car3 = new Car;

$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = 2000;
$car1->driver = $mike;


$car2->brand = 'Mazda';
$car2->model = 6;
$car2->year = 2015;
$car2->driver = $chester;

$car3->brand = 'Ford';
$car3->model = 'Taurus';
$car3->year = 1995;
$car3->driver = $max;

echo '<pre>';
var_dump($car1);
var_dump($car2);
var_dump($car3);

echo '<pre>';
print_r($car1);
print_r($car2);
print_r($car3);

/*Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями. 
Привести массив к объекту. Проанализировать результат при помощи var_dump.*/
$array = ['name' => 'Chester', 'email' => 'chesdriv@rambler.ru', 'massage' => 'Hello everybody'];
$obj = (object)$array;
var_dump($obj);
