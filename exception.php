<?php

ini_set('display_errors',1);

// function divide($dividend, $divisor) {
//     if($divisor == 0) {
//       throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }
  
// echo divide(5, 0);


echo "<br><br>";

function multiple($x, $y) {
    if ($y == 2) {
        throw new Exception('Multiplication not done');
    } else {
        return $x * $y;
    }
}
try{
    echo multiple(2,2);
}
catch(Exception $e)
{
    echo "Unable to do the multiplication";
}
finally{
    ECHO "<BR>";
    echo "THE PROCESS OF EXCEPTION FOR MULTIPLE IS COMPLETED";
}

