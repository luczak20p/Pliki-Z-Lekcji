package klasyOrazMetody;

public class FabrykaProstokatow {
    public static void main(String[] args){
        
        Prostokat aaa = new Prostokat(10, 5);
        Prostokat bbb = new Prostokat(4, 2);
        System.out.println(aaa.dlugoscBokuA());
        System.out.println(bbb.dlugoscBokuB());

        System.out.println(aaa.dlugoscBokuA());

        aaa.UstawBokA(20);
        System.out.println(aaa.dlugoscBokuA());

        Prostokat nowy = new Prostokat(5, 3, "nowy");

        System.out.println(nowy.nazwaProstokata());
        
        nowy.test();
        nowy.test("BBBBBBBBBBBBBBBBBBBB");

        int poleProstokata = nowy.test(nowy.dlugoscBokuA(),nowy.dlugoscBokuB());

        System.out.println(poleProstokata);

        
    }
}
