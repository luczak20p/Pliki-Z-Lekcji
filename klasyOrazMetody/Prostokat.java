package klasyOrazMetody;
// package - po polsku pakiet
public class Prostokat {
    private int a,b;
    private String NazwaProstokata;
    public Prostokat(int a, int b){
        //Konstruktor
        this.a=a;
        this.b=b;
    }


    //stworzymy kolejny konstruktor rozszerzający nazwe starego konstruktora(przeciążenia konstruktora)
    public Prostokat(int a, int b, String NazwaProstokata){
        //Konstruktor
        this.a=a;
        this.b=b;
        this.NazwaProstokata=NazwaProstokata;
    }
    
    public int dlugoscBokuA(){
        return this.a;
    }

    public int dlugoscBokuB(){
        return this.b;
    }

    public void UstawBokA(int a){
        this.a=a;
    }

    public void UstawBokB(int b){
        this.b=b;
    }

    public String nazwaProstokata(){
        return this.NazwaProstokata;
    }

    public void UstawNazwa(String nazwa){
        this.NazwaProstokata=nazwa;
    }

    public void test(){
        System.out.println("AAAAAAAAAAAAAAAAAAAA");
    }

    public void test(String tekst){
        System.out.println(tekst);
    }

    public int test(int a, int b){
        return a*b;
    }



}

