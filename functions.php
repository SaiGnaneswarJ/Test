<?php

function add($a,$b)
{
    return $a+$b;
}

echo add(5,5);


echo "<br><br>";

function message()
{
    echo "Good Evening";
}

message();

echo "<br><br>";

function factorial($num)
{
  if($num ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $num * factorial($num-1);
    }
}
echo factorial(6);


echo "<br><br>";

function result($a,$b)
{
    if($a < $b){
        return "$a is less than $b";
    }
    elseif($a > $b)
    {
        return "$a is greater than $b";
    }
    else{
        return "$a is equal to $b";
    }
}

echo result(10,5);


echo "<br><br>";


function counting($number)
{
    for($i = $number;$i <= 10;$i++)
    {
        echo $i;
    }
}

counting(5);


echo "<br><br>";

$as = array("name" => "Gnaneswar","email" => "gnaneswar@gmail.com","mobile" => "8919110988");

function details($as)
{
    foreach($as as $key => $value)
    {
        echo $key."\n is : ".$value."<br>";
    }
}

details($as);

echo "<br><br>";




















?>