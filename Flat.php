<?php


// class Flat{
//     public ?string $type = null;
//     public function isTypeSet():bool{
//         return (bool) $this->type;
//     }

//     public function printType():void{
//         if($this->isTypeSet()){
//             echo 'Nasze mieszkanie to: '.$this->type.'<br>';
//         }
//         else{
//             echo 'Jeszcze nie wiem jakie mieszkanie chce <br>';
//         }
//     }
// }

// $myFlat = new Flat();
// $myFlat->printType();
// $myFlat->type = "Watch your step";
// $myFlat->printType();

//przykład 2
// class Flat{
//     public bool $closed = true;
//     public function close():void{
//         $this->closed = true;
//     }

//     public function open():void{
//         $this->closed = false;
//     }
// }

// $myFlat = new Flat;
// var_dump($myFlat);
// $myFlat->closed = false;
// var_dump($myFlat);


class Flat{
    private int $doorLockCode;
    public bool $closed = true;

    public function close():void{
        $this->closed = true;
    }

    public function open(int $code):void{
        if($code===$this->doorLockCode){
        $this->closed = false;
        echo 'otwarłeś <br>';
    }
    else{echo 'zły kod <br>';}
    }

    public function isOpen():bool{
        return !$this->closed;
    }

    public function __construct(string $code){

        $this->doorLockCode = $code;
        // if(strlen((string)$doorCode<6)){
        //     echo 'Kod jest za krótki';
        // }
        // else{
        //     $this->doorLockCode = $code;
        // }
    }
}


$newDoorCode = rand(999999,100000);
$myFlat = new Flat($newDoorCode);

$myFlat->open($newDoorCode);
$myFlat->open(999);

var_dump($myFlat);

?>