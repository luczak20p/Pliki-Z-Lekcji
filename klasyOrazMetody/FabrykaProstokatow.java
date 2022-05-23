package klasyOrazMetody;

public class FabrykaProstokatow {
    public static void main(String[] args){
        
        Prostokat aaa = new Prostokat(10, 5);
        Prostokat bbb = new Prostokat(4, 2);
        System.out.println(aaa.a);
        System.out.println(bbb.a);

        System.out.println(aaa.dlugoscBokuA());
    }
}
