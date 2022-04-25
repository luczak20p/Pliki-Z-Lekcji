 <?php
 class student
 {
 private $imie;
 private $nazwisko;
 private $indeks;
 public function __construct($imie,$nazwisko,$indeks)
 {
 $this->imie=$imie;
 $this->nazwisko=$nazwisko;
 $this->indeks=$indeks;
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
 }
 }
 // program
 $student = new student('Jan','Kowalski','350');
 // utworzenie nowej instancji klasy (obiektu)
 $student->displayData();
 ?>

 