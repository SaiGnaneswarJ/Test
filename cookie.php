<?php
//Setting cookie
setcookie('Username', 'Gnaneswar',  time() + 120);
?>
<html>

<body>
    <h3>COOKIES </h3>
    <?php
    if (isset($_COOKIE['Username'])) {
        echo "The Username is" . $_COOKIE['Username'];
    } else {

        echo "No Username is found";
    }    
    ?>
</body>

</html>














