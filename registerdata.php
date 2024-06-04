<?php

class Register
{
    private $conn;

    // assigning the connection details
    public function __construct()
    {
        $servername = "localhost";
        $username = "saignaneswarj";
        $password = "Gnaneswar@2002";
        $dbname = "Practice";

        $this->connect($servername, $username, $password, $dbname);
    }
    
    // connecting to the data 
    private function connect($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);
        }
    }

    // checking the email if exists record will not enter if not record enters
    public function emailExists($email)
    {
        $sql = "SELECT COUNT(*) as count FROM Present WHERE email = '$email'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $check = $result->fetch_assoc();
            return $check['count'] > 0;
        }
        return false;
    }

    // storing the data using the insert query

    public function storedata($name, $email, $password, $confirmpassword)
    {
        if ($this->emailExists($email)) {
            echo "Email already exists enter the correct email";
            echo '<br><br>';
            echo '<a href="register.php"><button>Back</button></a>';
        } else {
            if ($password != $confirmpassword) {
                echo "Passwords do not match";
                echo '<br><br>';
                echo '<a href="register.php"><button>Back</button></a>';
                return;
            }

            $query = "INSERT INTO Present (name, email, password) VALUES ('$name', '$email', '$password')";

            if ($this->conn->query($query) === TRUE) {
                echo "New Record added successfully";
                echo '<br><br>';
                echo '<a href="login.php"><button>Back</button></a>';
            } else {
                echo "Error: " . $query . "<br>" . $this->conn->error;
            }
        }
    }

    // posting the data to the database to store

    public function postdata()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = ($_POST["name"]);
            $email = ($_POST["email"]);
            $password = ($_POST["password"]);
            $confirmpassword = ($_POST["confirmpassword"]);

            $this->storedata($name, $email, $password, $confirmpassword);
        }
    }

}
$Register = new Register();
$Register->postdata();

?>