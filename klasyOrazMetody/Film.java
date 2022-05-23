package klasyOrazMetody;
public class Film {
    //metody we static należą do obiektu - dopiero po utworzeniu klasy mamy dostęp do metody
    //metody ze static są dostępne od razu z poziomu klasy
    String nazwa = "Standard";
    int rok;
    // public static void info(int a){
    // } static widać po Film.
    void informacje(){
        System.out.println(this.nazwa);
        System.out.println(this.rok);
    }
}
