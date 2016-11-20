<?php

<?php
error_reporting(E_All);
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
$toyota = new Car;
$mazda = new Car;
$ford = new Car;

$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;
$toyota->driver

$mazda->brand = 'Mazda';
$mazda->model = 6; 
$mazda->year = 2015;

$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = 1995;
