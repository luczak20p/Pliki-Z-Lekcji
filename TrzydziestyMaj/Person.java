package TrzydziestyMaj;

public class Person {
    String name;
    int age;
    //aby odwołać się do zmiennej, która nie jest statyczna wystarczy utworzenie obiektu np. p1.zmienna
    //aby odwołać się do zmiennej statycznej piszemy nazwę klasy, a po kropce nazwe zmiennej
    static int population=0;
    //kontruktor ma taką samą nazwęjak klasa
    Person(String name, int age){
        this.name=name;
        this.age=age;
        population++;
    }
    Person(String name){
        this.name=name;
        age=-1;
        population++;
    }


    //metody statyczne nie zmienią pól niestatycznych
    public void inc(){
        age++;
    }
    
}
