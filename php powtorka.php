<?php
//Person.php
class Person{
    private int $age;
    private float $weight;
    public function __construct(int $age,float $weight){
        $this->age = $age;
        $this->weight = $weight;
    }

    public function WiekToTylkoLiczba():int{
        return $this->age;
    }

    public function WagaWliczajacUbrania():float{
        return $this->weight;
    }
}

$Adam = new Person(18, 70.5);
$Eva = new Person(18, 54.8);
echo 'Wiek Ewy: '.$Eva->WiekToTylkoLiczba().' Ewa waży(za dużo): '.$Eva->WagaWliczajacUbrania().'<br>';
echo 'Wiek Adasia: '.$Adam->WiekToTylkoLiczba().' Adam waży(Gigachad): '.$Adam->WagaWliczajacUbrania();

//Vehicle.php
class Vehicle{
    private $brand;
    private $color;
    public function setBrand($brand):void{
        $this->brand = $brand;
    }

    public function setColor($color):void{
        $this->color = $color;
    }

    public function getBrand():string{
        return $this->brand;
    }

    public function getColor():string{
        return $this->color;
    }
    // public function drive() :string{
    //     return 'JADYMY';
    // }
}

$car = new Vehicle();
$car->setBrand('Renault');
$car->setColor('Red');
echo($car->getBrand().' '.$car->getColor());
// echo($car->drive().'&nbsp');
// $bike = new Vehicle();
// $bike->brand = 'Romet';
// $bike->color = 'Silver';
// echo($bike->brand.'&nbsp');

//Fruit.php
class Fruit{
    protected string $colour;
}

class Banana extends Fruit{
    public function setColour(string $colour){
        $this->colour=$colour;
    }

    public function getColour():string{
        return $this->colour;
    }
}

$bananba = new Banana();
$bananba->setColour("green");
echo $bananba->getColour();

//Constants.php
class User{
    const TABLE_NAME = "users";
    private $name;
    public function __construct($name){
        $this->name = $name;
        // //Pierwszy sposób odwołania do stałej w ramach klasy
        // self::TABLE_NAME;
        //Drugi sposób
        static::TABLE_NAME;
    }
}

//StringHelper.php
class StringHelper{
    public static function toUpper(string $text):string{
        return mb_strtoupper($text);
    }

    public static function toLower(string $text):string{
        return mb_strtolower($text);
    }

}
echo StringHelper::toUpper('Witaj w PHP').PHP_EOL;
echo StringHelper::toLower('Witaj w PHP').PHP_EOL;

//Time.php
//przy stałych nie dajemy modyfikatorów dostępu
class Time{
    const SECOND = 1;
    const MINUTE = self::SECOND*60;
    const HOUR = self::MINUTE*60;
    const DAY = self::HOUR*24;
    const YEAR = self::DAY*365;
}
echo 60*60*24 .PHP_EOL;
echo Time::DAY;

//abstract.php

//za pomocą interfejsu - ustawialiśmy metody po KLASIE
//za pomocą konstruktora - ustawialiśmy pola na OBIEKCIE $book = new Book( , , )
//Klasa abstrakcyja - jest rozszerzeniem interfejsów
//wykorzystujemy ją przy dziedziczeniu
//W klasie abstrakcyjnej możemy dodawać metody, które faktycznie coś robią, nie musimy ich implemntować w klasach niżej 
//nie mogę tworzyć obiektu klasy abstrakcynej, ale mogę stworzyć nową klasę, która będzie z niej dziedziczyła i dopiero na tej klasie mogę stworzyć obiekt(pod warunkiem że ta nowa nie będzie abstrakcyjna) 
//w terminalu php nazwa_pliku.php = kompiluje 
//klasa - jest wzorem do tworzenia NOWYCH OBIEKTÓW
//klasa abstrakcyjna - jest wzorem do tworzenia KLAS POTOMNYCH
//różnica między ZWYKŁĄ KLASĄ a ABSTRAKCYJNĄ jest taka, że z klasy abstrakcyjnej nie jesteśmy w stanie stworzyć obiektu

interface CommandNameInterface{
    public function getName();
}

abstract class Comand implements ComandNameInterface{
    abstract public function getName();
    public function run(){
        echo "Running comand {$this->getName()}";
    }
}

class NewComand extends Comand{
    public function getName(){
        return 'NewComand';
    }
}

// $a = new NewComand();
// $a->run();
abstract class SomeClass{
    protected string $property;
    //poniżej deklaracja klasy abstrakcyjnej
    abstract public function doSth(string $pramal, array $pramal2): object;
    //zwykła metoda
    public function property():string{
        return this->property;
    }
}

class Test extends SomeClass{
    public function doSth(string $pramal, array $pramal2):object{}
}

//AbstractClass.php
//ZWYKŁA KLASA
class ClassParent{}
class Childe extends ClassParent{}
$parent = new ClassParent();
$childe = new Childe();

var_dump($parent);
var_dump($childe);

// KLASA ABSTRAKCYJNA
abstract class AbstractParent{};
class ChildeFromAbstract extends AbstractParent{};
$childe1 = new ChildeFromAbstract();
var_dump($childe1);

// $parent1 = new AbstractParent();
// var_dump($parent1);
//FATAL ERROR - skrypt przerywa działanie
//PARS ERROR - nie zacznie się wykonywać skrypt, błąd składni
//Warning - błąd że coś w kodzie jest nie tak, ostrzeżenie
//Notice - lżejszy warning, skrypt wykona się do końca
//Klasa abstrakcyjna - to szablon dla klas potomych, dziedziczących

?>