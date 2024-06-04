<?php

class Data
{
    private $conn;

    // connecting to the database using constructor
    public function __construct()
    {
        $servername = "localhost";
        $username = "saignaneswarj";
        $password = "Gnaneswar@2002";
        $dbname = "Practice";

        $this->connect($servername, $username, $password, $dbname);
    }
    // definimg the destructor for the script
    public function __destruct()
    {
        exit("exited here");
        if ($this->conn) {
            $this->conn->close();
        }
    }
    

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
        $sql = "SELECT COUNT(*) as count FROM Mydata WHERE email = '$email'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $check = $result->fetch_assoc();
            return $check['count'] > 0;
        }
        return false;
    }

    // storing the data using the insert query

    public function storedata($name, $email, $mobile, $age)
    {
        if ($this->emailExists($email)) {
            echo "Email already exists enter the correct email";
        } else {
            $query = "INSERT INTO Mydata (name, email, mobile, age) VALUES ('$name', '$email', '$mobile', '$age')";

            if ($this->conn->query($query) === TRUE) {
                echo "New Record added successfully";
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
            $mobile = ($_POST["mobile"]);
            $age = ($_POST["age"]);

            $this->storedata($name, $email, $mobile, $age);
        }
    }

    // displaying the data from the database

    public function displaydata()
    {
        $query = "SELECT * FROM Mydata";
        $result = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                echo 'Name: ' . $data['name'] . '<br>';
                echo 'Email: ' . $data['email'] . '<br>';
                echo 'Contact: ' . $data['mobile'] . '<br>';
                echo 'Age: ' . $data['age'] . '<br><br>';
               
            }
        } else {
            echo 'No records found';
        }
    }
}

$Data = new Data();
$Data->postdata();
$Data->displaydata();











?>
