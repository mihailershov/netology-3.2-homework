<?php

require_once 'core.php';

$smartphone = new Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2);
/*
echo $smartphone->totalPrice() . PHP_EOL;
$smartphone->setPropertyWithReturn('color', 'black')->setPropertyWithReturn('model', 'android');
if (!$smartphone->areYouRich()) echo 'Вы бедны';
*/


$car = new Car('BMW', 2300000, 'car', 1700);
/*
$car->setOilVolume(45);
if ($car->isHasOil()) echo 'Бенз есть' . PHP_EOL;
*/

$bagOfPotatoes = new BagOfPotatoes('Avrora', 20, 'food', 12);
/*
echo $bagOfPotatoes->getProperty('price') . PHP_EOL;
echo $bagOfPotatoes->totalPrice() . PHP_EOL;
*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Определения</title>
    <style>
        * {
            font-family: sans-serif;
        }
        span {
            font-weight: bold;
        }
        h1 {
            text-align: center;
        }
        body {
            max-width: 1420px;
            margin: auto;
        }
        li {
            padding: 10px 0;
        }
    </style>
</head>
<body>
<p><span>Полиморфизм</span> - это реализация одного и того же метода абстрактного класса или интерфейса в разных классах</p>
<p><span>Наследование</span> - это когда при расширении класса, дочерний класс наследует все свойства и методы (кроме приватных)</p>
<h1>Различия интерфейсов и абстрактных классов</h1>
<p>Основное отличие интерфейса от абстракного класса - интерфейс может содержать в себе только сигнатуры методов, абстрактный класс может содержать как сигнатуры методов, <b>так и их реализацию</b>. В абстрактном классе можно указывать свойства, в интерфейсе - <b>нельзя</b>. Можно сделать множественный implement интерфейсов, а множественный extends абстрактных классов сделать <b>нельзя</b>.</p>
<p>Если рассматривать ситуацию, когда мы выбираем, в чем хранить сигнатуры методов - в интерфейсе или в абстрактном классе, то тут мы должны вспомнить один из принципов SOLID - interface segregation (разделение интерфейсов). Это значит, что всегда надо стараться разделять сигнатуры методов по контексту и "распихивать" по интерфейсам, а потом уже делать множественный implement. Да, и тут мы вспоминаем, что множественное наследование не поддерживается для классов, поэтому мы просто не сможем соблюдать принцип разделение интерфейсов, используя абстрактные классы для хранения сигнатур методов, соответственно, используем интерфейсы в этом случае. Ну а абстрактные классы используем, когда надо именно описать некую сущность, то есть, включить не только методы, но и свойства. Методы могут быть и определенные внутри абстрактного класса, и наследуемые от интерфейса (хотя лучше предусмотреть все методы в интерфейсе, чтобы было меньше шансов допустить ошибку).</p>
</body>

</html>
