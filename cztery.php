<?php
abstract class czlowiek
{
protected $imie;
protected $nazwisko;
protected function putData($imie,$nazwisko)
{
$this->imie=$imie;
$this->nazwisko=$nazwisko;
}
}
class student extends czlowiek
{
private $indeks;
private $grupa;
public function __construct($imie,$nazwisko,$indeks,$grupa)
{
$this->imie=$imie;
$this->nazwisko=$nazwisko;
$this->indeks=$indeks;
$this->grupa=$grupa;
}
public function displayData()
{
echo "<h3>Dane studenta:</h3>";
echo "imie: $this->imie<br/>";
echo "nazwisko: $this->nazwisko<br/>";
echo "indeks: $this->indeks<br/>";
echo "grupa: $this->grupa<br/><br/>";
}
}

class profesor extends czlowiek
{
private $katedra;
public function __construct($imie,$nazwisko,$katedra)
{
$this->imie=$imie;
$this->nazwisko=$nazwisko;
$this->katedra=$katedra;
}
public function displayData()
{
echo "<h3>Dane profesora:</h3>";
echo "imie: $this->imie<br/>";
echo "nazwisko: $this->nazwisko<br/>";
echo "katedra: $this->katedra<br/><br/>";
}
}

class sprzedawca extends czlowiek
{
private $pozycja;
private $dzial;
public function __construct($imie,$nazwisko,$pozycja,$dzial)
{
$this->imie=$imie;
$this->nazwisko=$nazwisko;
$this->pozycja=$pozycja;
$this->dzial=$dzial;
}
public function displayData()
{
echo "<h3>Dane profesora:</h3>";
echo "imie: $this->imie<br/>";
echo "nazwisko: $this->nazwisko<br/>";
echo "pozycja: $this->pozycja<br/><br/>";
echo "dzial: $this->dzial<br/><br/>";
}
public function getPozycja(){
return $this->pozycja;
}
}
// program
$student=new student('Jan','Kowalski','350','A01');
$student->displayData();
$profesor=new profesor('Stefan','Nowak','Informatyka Stosowana');
$profesor->displayData();
$sprzedawca=new sprzedawca('Marcin','Małpa','Menedżer','Marketing');
$sprzedawca->displayData();
if($sprzedawca->getPozycja()=='Menedżer'){
echo "Jesteś menedżerem";
}
?>
