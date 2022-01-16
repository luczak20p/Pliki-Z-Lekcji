<?php
//Car.php
class Car{
    private $brand;
    // private $colour;
    private $engine;
    private $consumption;
    private $fuel;
    const MAX_FUEL = 100;
    //public function __construct($brand,$colour,$engine){
    //$this->brand = $brand;
    //$this->colour = $colour;
    //$this->engine = $engine;
    // }

    public function setBrand($brand){
        $this->brand = $brand;
    }

    // public function setColour($colour){
    //$this->colour = $colour;
    // }

    public function setEngine($engine){
        $this->engine = $engine;
    }

    public function setFuel($fuel){
        $this->fuel = $fuel;
    }

    public function setConsumption($consumption){
        $this->consumption = $consumption;
    }

    public function getBrand(){
        return $this->brand;
    }

    // public function getColour(){
    //return $this->colour;
    // }

    public function getEngine(){
        return $this->engine;
    }

    public function getConsumption(){
        return $this->consumption;
    }

    public function getFuel(){
        return $this->fuel; 
    }

    public function CzyPuste(){
        if($this->fuel>0){
            return 'Bak nie pusty';
        }
        else{
            return 'Bak pusty lub czarna dziura';
        }
    }

    public function drive($km){
        if($this->getFuel()>0){
            $this->fuel -=($this->getConsumption()*$km/100);
            if($this->getFuel()<0){
                $this->setFuel(0);
                echo 'Zabrakło paliwa mid jazda. No moar';
            }
        }
        else{
            echo 'Nie masz paliwa chopie';
        }
    }

    public function refuel($liters){
        if($this->getFuel()<= self::MAX_FUEL){
            $this->fuel += $liters;
            if($this->getFuel()>self::MAX_FUEL){
                $this->fuel = setFuel(self::MAX_FUEL);
            }
        }
    }
}

//index.php
//include 'Car.php';
$Moj_Samochod = new Car();
// $Moj_Samochod->setColour('Noir');
$Moj_Samochod->setBrand('Renault');
$Moj_Samochod->setEngine('.0');
$Moj_Samochod->setFuel('10');
$Moj_Samochod->setConsumption('5');
echo 'Marka mojego pojazdu:'.$Moj_Samochod->getBrand().'<br>';
// echo 'Kolor mojego pojazdu:'.$Moj_Samochod->getColour().'<br>';
echo 'Silnik mojego pojazdu:'.$Moj_Samochod->getEngine().'<br>';
echo 'W baku:'.$Moj_Samochod->getFuel().'<br>';
echo 'Pali:'.$Moj_Samochod->getConsumption().'<br>';
// $Sasiad_Samochod = new Car();
// $Sasiad_Samochod->setColour('Rot');
// $Sasiad_Samochod->setBrand('Volkswagen');
// $Sasiad_Samochod->setEngine('V8');
// echo 'Marka mojego pojazdu:'.$Sasiad_Samochod->getBrand().'<br>';
// echo 'Kolor mojego pojazdu:'.$Sasiad_Samochod->getColour().'<br>';
// echo 'Silnik mojego pojazdu:'.$Sasiad_Samochod->getEngine().'<br>';
echo 'W baku:'.$Moj_Samochod->getFuel().'<br>';
echo $Moj_Samochod->drive(100).'<br>';
echo 'W baku:'.$Moj_Samochod->getFuel().'<br>';
echo $Moj_Samochod->drive(100).'<br>';
echo $Moj_Samochod->drive(100).'<br>';
?>