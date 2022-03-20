<?php
//struktura przykładowa z tablicy

interface Template
{
    public function odglos();

}

class Vehicle implements Template{
    // public $zmienna1;
    // protected $zmienna2;
    // private $zmienna3;

    // public function __construct(string $zmienna1=null,int $zmienna2=null,bool $zmienna3=null){

    //     $this->zmienna1=$zmienna1;
    //     $this->zmienna2=$zmienna2;
    //     $this->zmienna3=$zmienna3;

    // }
    public function odglos(){
        return "sinik dziala";
    }

}

//=========================================

class Train extends Vehicle{

}

class Plane extends Vehicle{

}

class Car extends Vehicle{

}

//=========================================

class Fighter extends Plane{

}

class Bomber extends Plane{

}

//=========================================

class StealthFighter extends Fighter{

}

//===============================================================







?>