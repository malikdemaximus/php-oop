<?php

require_once 'classes/Car.php';
require_once 'classes/File.php';
require_once 'classes/Calculator.php';
require_once 'classes/Product.php';
require_once 'classes/PhoneProduct.php';
require_once 'classes/AccessoryProduct.php';

$car1 = new Car('Audi', 'TT', 2018, 241);
$car2 = new Car('BMW', 'M2', 2020, 250);

$car1 ->getInfo();
$car2 ->getInfo();

echo "<br>";
echo Car::getCount();

$test = new File('test.txt');
$test->write('Строка 1');
echo "<br>";
echo "<br>";

echo Calculator::calcSqrt(1); 
echo "<br>";
echo Calculator::calcSin(1);
echo "<br>"; 
echo Calculator::calcRoundArea(5); 

$phone = new PhoneProduct('IPhone 6s', 5000, 176, 'Да', 'A9', '64', '5.5');
$accessory = new AccessoryProduct('Чехол IPhone 6s', 400, 25, 'Нет', 'Для телефона', 'IPhone 6, IPhone 6s');
echo $phone->getInfo();
echo $accessory->getInfo();
?>