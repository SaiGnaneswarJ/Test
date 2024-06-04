<?php

ini_set('display_errors',1);


// inheritance -  it derives of one class and another class by using extends keyword.
//inheritance is used to reduce code duplication by using code from the parent class in the child classes. 



// Public:
// The public access modifier allows properties and methods to be accessed from anywhere, including outside the class, subclasses, and instances of the class. Public members are inherited by child classes and can be overridden or extended.


// Protected:
// The protected access modifier limits the visibility of properties and methods to the class itself and its subclasses. Protected members can be accessed within the class and its subclasses, but not from outside the class hierarchy. Protected members are inherited by child classes and can be overridden or extended.


// Private:
// The private access modifier restricts the visibility of properties and methods to the class where they are defined. Private members cannot be accessed or inherited by child classes or instances of the class. They are only accessible within the class itself. Therefore, private members cannot be overridden or extended in child classes.




class Board
{
    public $boardname;

    public function set_board($boardname)
    {
        $this->boardname = $boardname;
    }

    public function display()
    {
        return $this->boardname;
    }
}

$board = new Board();
$board -> set_board("Hyderabad");
echo $board->display();

echo "<br><br>";


// class City
// {
//     protected $cityname;

//     public function set_cityname($cityname)
//     {
//         $this->cityname = $cityname;
//     }

//     protected function show()
//     {
//         return $this->cityname;
//     }
// }

// $city = new City();
// $city->set_cityname("Banglore");
// echo $city->show();

// echo "<br><br>";

class Park
{
    public $parkname;

    public function set_parkname($parkname)
    {
        $this->parkname = $parkname;
    }

    public function show_parkname()
    {
        return $this->parkname;
    }
}

// $park = new Park();
// $park -> set_parkname("Hyderabad international Zoo park");
// echo $park->show_parkname();

class Info extends Park
{
    public function message()
    {
        echo "The park name is ";
    }
}

$info = new Info();
$info->message();
echo "<br>";
$info->set_parkname("Hyderabad international Zoo park");
echo $info -> show_parkname();

echo "<br><br>";

class Car {

    private $topSpeed;

    function __construct($topSpeed) {
        $this->topSpeed = $topSpeed;
    }

    public function drive() {
        return "Driving at " . $this->topSpeed . " vrooms<br>";
    }
}

$car1 = new Car(120);
echo $car1->drive();

echo "Top speed for this car is " . $car1->topSpeed;









































?>