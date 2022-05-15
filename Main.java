import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        System.out.println("Hello world!");


    //kod - komentarz jednoliniowy

/*
kod
 */
    //- komentarz wieloliniowy


    /**
     * kod
     */
//- komentarz dokumentacyjny - Jeśli w środowisku programistycznym(np. IntelliJ) wejdziemy w opis metody to zobaczymy tam treść z tego komentarza

//    Zmienne:
//
//    Deklaracja zmiennych bardzo podobna do C++
//
//    Typy danych w zmiennych:
//    całkowite - byte, short, int, long
//    zmiennoprzecinkowe - float, double(część całkowitą od ułamkowej oddzielamy kropką)
//    znaki - char
//    prawda/fałsz - boolean(skrót bool nie działa)
//    ciąg znaków - String(z wielkiej litery)
//
//    Każdy z typów prostych ma odpowiadający mu obiekt:

    Integer i2 = Integer.valueOf(10);

    //Deklaracja: typ nazwaZmiennej = wartość;

    //Przykładowa deklaracja:
    int age = 19;
    System.out.println(age);

    int numer1, numer2;//(można deklarować zmienne koło siebie)
    numer1=10;
    numer2=numer1;
    System.out.println(numer2);//10
    numer1=20;
    System.out.println(numer2);//wciąż 10

    //Przed zmienną możesz napisać "final". Zadeklarowana w ten sposób zmienna może być tylko raz zainicjowana i nazywa się zmienną finalną.
    //Próba przypisania do niej wartości po raz drugi = nie kompiluje się.

    final double eulerek = 2.71;
    //eulerek=8.56;//błąd


////    znalazłem też takie coś:
//
//    Scanner inputScanner = new Scanner(System.in);
////inputScanner.nextInt();
////inputScanner.nextDouble();
//
////    przykład zastosowania tego Scanner:
//
//    double[] temperature = new double[7];
//
//for(int i = 0; i < temperature.length; i++) {
//        System.out.println("Wprowadź liczbę " + (i+1)+": ");
//        temperature[i] = inputScanner.nextDouble();
//    }
//
//for(int i = 0; i < temperature.length; i++) {
//    System.out.println(temperature[i]);
//}
//
//
}



}