<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

class Student{

    public $imie;
    public $oczy;

    public function __construct($imie,$kolor){
        $this->imie = $imie;
        $this->oczy = new Oczy($kolor);
    }

    public function __clone(){
        $this->oczy = clone $this->oczy
    }
}

class Oczy{
    public $kolor;
    public function __construct($kolor){
        $this->kolor = $kolor;
    }
}

//A.REFERENCJE MADGE
// $a = new Student('Pablo');
// $b = $a;
// $b->imie="Juan";

//B. KLONOWANIE
$a = new Student('Pablo','Brązowe');
$b = clone $a;
$b->imie='Juan';
echo $a->imie.'<br>';
echo $b->imie.'<br>';

echo $a->oczy->kolor.'<br>';

echo $b->oczy->kolor.'<br>';



?>
    
</body>
</html>
