 <?php
 class student
 {
 private $imie;
 private $nazwisko;
 private $indeks;
 public $rok;
 public function __construct($imie,$nazwisko,$indeks,$rok=0)
 {
 $this->imie=$imie;
 $this->nazwisko=$nazwisko;
 $this->indeks=$indeks;
 $this->rok=$rok;
 }
 public function __destruct()
 {
 echo "koniec życia obiektu nr indeksu=$this->indeks<br/>";
 }
 public function displayData()
 {
 echo "<h3>Dane studenta:</h3>";
 echo "imie: $this->imie<br/>";
 echo "nazwisko: $this->nazwisko<br/>";
 echo "indeks: $this->indeks<br/><br/>";
 echo "rok: $this->rok";
 }
 }

 class pies{
 private $nazwa;
 private $rasa;
 public $wiek;
 public function __construct($nazwa="JohnDoe",$rasa="nieokreślona",$wiek=0){
 $this->nazwa=$nazwa;
 $this->rasa=$rasa;
 $this->wiek=$wiek;
 }
 public function __destruct(){
 echo "Piesek zdechł";
 }
 }
 // program
 $piesek = new pies("Marcin","Maltańczyk",2);
 echo $piesek->wiek;
 if($piesek->wiek>4){
  echo "Ale stary pies";
 }
 else{
  echo "Ale fajny piesek";
 }
 $student = new student('Jan','Kowalski','350',2);
 // utworzenie nowej instancji klasy (obiektu)
 $student->displayData();
 ?>

 
