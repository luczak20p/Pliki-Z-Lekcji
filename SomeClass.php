<?php

class SomeClass{

    public string $foo = 'public';
    private string $bar = 'private';
    protected string $baz = 'protected';

    private function privFoo():void{
        echo 'Prywatna metoda <br>';
    }

    public function printProperties(){
        var_dump($this->foo);
        var_dump($this->bar);
        var_dump($this->baz);
        $this->privFoo();
    }
}

$object = new SomeClass();

//var_dump($object->foo);
//var_dump($object->bar);
//var_dump($object->baz);
//$object->privFoo();
$object->printProperties();

?>