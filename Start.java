import java.lang.*;

public class Start
{
  public static void main(String args[])
  {
    Student s1 = new Student();
    s1.setName("JARIN TASNIM SHAMA");
    s1.setID("18-XXXXX-2");
    s1.setAge(22);
    s1.setPhoneNo("017XXXXXXXX");
    s1.setEmail("18-XXXXX-2@student.aiub.com");
    s1.setCGPA(3.8);
    s1.hasOccupation();
    s1.display();
    System.out.println("\n\n");
    Employee e1 = new Employee();
    e1.setName("TANVIR TANJUM SHOURAV");
    e1.setID("1110-XXXXX-3");
    e1.setAge(24);
    e1.setPhoneNo("015XXXXXXXX");
    e1.setEmail("tanvir@aiub.edu");
    e1.setSalary(150000);
    e1.hasOccupation();
    e1.display();
  }
}
