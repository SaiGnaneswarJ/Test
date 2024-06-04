<?php


session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Value of session variable 'username': " . $username;
} else {
    echo "Session variable 'userid' not found.";
}


?>
