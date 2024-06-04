<?php

ini_set('display_errors',1);


// class - it is a template which describes the object and behaviour of objects.

// object - It's a compound data type that can store values of more than one type in a single variable.

/* you use the 'new' keyword followed by the class name. This will create an instance of the class which 
can then be used to call any public methods or access any public properties defined within the class.
*/


class Tech
{
    public $techname;
    public $techdetail;

    function __construct($techname, $techdetail)
    {
        $this->techname = $techname;
        $this->techdetail = $techdetail;
    }

    function get_name()
    {
        return $this->techname;
    }

    function get_detail()
    {
        return $this->techdetail;
    }

}

$res = new Tech("Python","PYTHON DEVELOPER");
echo $res->get_name();
echo"<br>";
echo $res->get_detail();

echo "<br><br>";

$item = array("chicken meat","masala","oil","rice");
class Dish
{
    public $dishname;
    public $dishitems;

    function set_dishname($dishname)
    {
        $this->dishname = $dishname;
    }

    function display()
    {
        return $this->dishname;
    }

    function set_dishitems($dishitems)
    {
        $this->dishitems = $dishitems;
    }

    function display_item()
    {
        return $this->dishitems;
    }
}

$Dish = new Dish();
$Dish->set_dishname("Chicken Biryani");
echo "DISH NAME:".$Dish->display();
echo "<br>";
$Dish->set_dishitems(json_encode($item));
echo "Dish Ingrediants :".$Dish->display_item();

echo "<br><br>";

class Hello
{
    public $name;

    function set_name($name)
    {
        $this->name = $name;
    }

    function display_name()
    {
        return $this->name;
    }


}

$Hello = new hello();
$Hello->set_name("Gnaneswar");
echo $Hello->display_name();

echo "<br><br>";


// constructor - it is used to initalize the object values.
//Constructors help organize and centralize the initialization logic of an object in one place.
// they can be used like database connection,cookies initializing,sessions describing.

class Greeting
{
    public $greet1;
    public $greet2;
    public $greet3;

    function __construct($greet1,$greet2,$greet3)
    {
        $this->greet1 = $greet1;
        $this->greet2 = $greet2;
        $this->greet3 = $greet3;


    }

    function show()
    {
        return $this->greet1;
        
    }
    function show1()
    {
        return $this->greet2;
    
    }
    function show2()
    {
        return $this->greet3;
        
    }
     
}

$greeting = new Greeting("Good Morning","Good Afternoon","Good Evening");
echo $greeting->show();
echo "<br>";
echo $greeting->show1();
echo "<br>";
echo $greeting->show2();


echo "<br><br>";



class Employee
{
  private $first_name;
  private $last_name;
  private $age;
  
  public function __construct($first_name, $last_name, $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }
 
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  public function getLastName()
  {
    return $this->last_name;
  }
 
  public function getAge()
  {
    return $this->age;
  }
}

$employee = new Employee("Sai","Gnaneswar","22");
echo "FIRSTNAME :".$employee->getFirstName()."<br>";
echo "LASTNAME :".$employee->getLastName()."<br>";
echo "AGE :".$employee->getAge();


echo "<br><br>";

// destructor -- it will delete the object values in the constructor and ends the class.
//This method is also used for cleaning up resources and to free the memory for accommodating more.
// distructor will call all the script is executed or the script is stoped.


class Homework
{
    public $workname;
    
    function __construct($workname)
    {
        $this->workname = $workname;
    }

    function get_work()
    {
        return $this->workname;
    }

    function __destruct()
    {
        echo "<br>The homework {$this->workname} is completed ";
    }

}

$work = new Homework("Tables");

$home = new Homework("Essay Writing");

echo $work->get_work();
echo "<br>";
echo $home->get_work();

echo "<br><br>";


interface Book {
    public function bookname();
}
  
class Store implements Book {
    public function bookname() {
      echo "Game of thrones";
    }
}
  
$book = new Store();
$book->bookname();