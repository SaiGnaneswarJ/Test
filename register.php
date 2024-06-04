<html>
<head>
      <tittle>REGISTER DETAILS</tittle>
</head>
<body>
    <!-- creating form in the html -->
    <form method="post" action="registerdata.php">
        <br><br>
        <label>NAME :</label><br><br>
        <input type="text" name='name' placeholder = 'Name' required> 
        <br><br>
        <label>EMAIL :</label><br><br>
        <input type="email" name='email' placeholder = 'Email' required> 
        <br><br>
        <label>PASSWORD :</label><br><br>
        <input type="password" name = 'password' id = 'password' placeholder = 'Password' required>
        <br><br>
        <label>CONFIRM PASSWORD :</label><br><br>
        <input type="password" name = 'confirmpassword' id = 'confirmpassword' placeholder = 'Confirm Password' required>
        <br><br>
        <input type="submit" name = 'submit'>
        <button><a href="login.php">Back</a></button>
    </form>
</body>

</html>
