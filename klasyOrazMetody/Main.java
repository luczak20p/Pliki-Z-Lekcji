package klasyOrazMetody;
public class Main{
    public static void main(String[] args){
 
        Film avatar = new Film();
        avatar.nazwa="Pirci z Karibów";
        avatar.rok = 2004;
        

        Film titanic = new Film();
        titanic.nazwa="Moskwa";
        titanic.rok=2018;

        // avatar.informacje();
        // titanic.informacje();

        //zmienne prymitywne - kopia, zmienne te takie lepsze - referencja

        Film avatar2 = avatar;
        avatar2.informacje();
        avatar2.nazwa="nie";
        avatar.informacje();


    }
}

