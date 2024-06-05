<?php

ini_set('display_errors',1);


$x = 50;

if($x < 10)
{
    echo " x is less than 10";
}
elseif($x > 10)
{
    echo "x is greater than 10";
}
else{
    echo "x is $x";
}

echo "<br>";

if($x == 100)
{
    echo "x is 100";
}
else
{
    echo "x is $x";
}

echo "<br><br>";


$d = date("H");


if ($d >= 6 && $d < 12)
{
    echo "Good Morning";
}
elseif($d >= 12 && $d < 16)
{
    echo "good afternoon";
}
elseif($d >= 16 && $d < 20)
{
    echo "good evening";
}
elseif($d >= 20)
{
    echo "good night";
}
else{
    echo "Have a nice day!";
}

echo "<br><br>";

switch($d)
{
    case ($d >= 6 && $d < 12): 
       echo "Good Morning";
       break;
    case ($d >= 12 && $d < 16):
        echo "good afternoon";
        break;
    case ($d >= 16 && $d < 20):
        echo "good evening";
        break;
    case ($d >= 20):
        echo "good night";
        break;
    default:
        echo "Have a nice day!"; 
}

echo "<br><br>";

$greet = "morning";


if(strlen($greet) == 7)
{
    echo "morning";
}
elseif(strlen($greet) < 7)
{
    echo "no response";
}
else{
    echo "not found greeting";
}


echo "<br><br>";

switch($greet)
{
    case "morning":
        echo "Good Morning";
        break;
    case "afternoon":
        echo "Good Afternoon";
        break;
    case "evening":
        echo "Good Evening";
        break;
    case "night":
        echo "Good Night";
        break;
    default:
        echo "no response";
}




























?>