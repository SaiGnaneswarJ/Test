<?php

class Login
{
    private $conn;
    
    // assigning database details
    public function __construct()
    {
        $servername = "localhost";
        $username = "saignaneswarj";
        $password = "Gnaneswar@2002";
        $dbname = "Practice";

        $this->connect($servername, $username, $password, $dbname);
    }
    
    // connecting to the database
    private function connect($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);
        }
    }
    
    // giving query to check the email and password

    public function loginuser($email, $password)
    {
        $query = "SELECT * FROM Present WHERE  email = '$email' and password = '$password'";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            // login successful
            return true;
        } else {
            // login failed
            return false;
        }
    }

    // post values to login
    public function postdata()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = ($_POST["email"]);
            $password = ($_POST["password"]);

            if ($this->loginuser($email, $password)) {
                echo "Login successful";
                $data = $this->getUser($email);
                $encoded_data = base64_encode($data);
                header("Location: home.php?data=$encoded_data");

            } else {
                echo "Login failed";
                echo "<br><br>";
                echo '<a href="login.php"><button>Back</button></a>';
            }
        }
    }


    // checking the email and get the name where the email matches
    public function getUser ($email)
    {
        $query = "SELECT * FROM Present WHERE  email = '$email'";
        $result = $this->conn->query($query);
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $name = $user['name']; // Replace 'name' with the actual column name in your 'Present' table
            return $name;
        } 
        else 
        {
            echo "Welcome, Good morning...!";
        }
    
    }
        
}

$Login = new Login();
$Login->postdata();



















































// session_start();

// class Login
// {
//     private $conn;
    
//     // assigning database details
//     public function __construct()
//     {
//         $servername = "localhost";
//         $username = "saignaneswarj";
//         $password = "Gnaneswar@2002";
//         $dbname = "Practice";

//         $this->connect($servername, $username, $password, $dbname);
//     }
    
//     // connecting to the database
//     private function connect($servername, $username, $password, $dbname)
//     {
//         $this->conn = new mysqli($servername, $username, $password, $dbname);

//         if ($this->conn->connect_error) {
//             die("Connection Failed: " . $this->conn->connect_error);
//         }header("Location: home.php");
//     }

//     // giving query to check the email and password
//     public function loginuser($email, $password)
//     {
//         $query = "SELECT * FROM Present WHERE email = '$email' and password = '$password'";
//         $result = $this->conn->query($query);

//         if ($result->num_rows > 0) {
//             // login successful
//             return true;
//         } else {
//             // login failed
//             return false;
//         }
//     }
// }

// $Login = new Login();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = ($_POST["email"]);
//     $password = ($_POST["password"]);

//     if ($Login->loginuser($email, $password)) {
//         $_SESSION["email"] = $email;
//         header("Location: home.php");
//     } else {
//         echo "Login failed";
//     }
// }






?>