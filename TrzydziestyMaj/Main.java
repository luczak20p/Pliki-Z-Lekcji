package TrzydziestyMaj;

public class Main {

    public static void main(String[] args){
        Person p1 = new Person("Pablo",25);
        System.out.println(p1.name+" "+p1.age);

        Person p2=new Person("Michael",20);
        System.out.println(p2.name+" "+p2.age);
  
        System.out.println(Person.population);

    }
    
}
