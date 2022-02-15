public class Main {
    Example 2.1 
package "problem2";

void
public class person {
    public int id;
    public String name;
   public String department;


    void show1(){
        System.out.println("Id"+id);
        System.out.println("name"+name);
        System.out.println("Department"+department);

    }

}

package problem2;


public class Teacher  extends person {
    public String designation;

    Teacher(int id,String name,String department,String designation){
        this.id=id;
        this.name=name;
        this.department=department;
        this.designation=designation;
    }
    void show2(){
        show1();
        System.out.println("designation"+designation);
    }


}

package problem2;


public class students extends person{
   String batch;

    students(int id,String name,String department,String batch){
        this.id=id;
        this.name=name;
        this.department=department;
        this.batch=batch;
    }
    void show3(){
       show1();
       System.out.println("batch"+batch);
    }

}

package problem2;


public class Test {
    public static void main(String[] args) {
        Teacher t1=new Teacher(2000,"kamal","Software  Engineering","Lecturer");


        Teacher t2=new Teacher(2001,"Karim","Software  Engineering","Lecturer");

}
