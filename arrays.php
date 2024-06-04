<?php

//creating indexed array

$a = array("name","email","mobile");

print_r($a);

// 2nd way distributed array initialization

$arr[0] = "good";
$arr[1] = "bad";
$arr[2] = "greeting";

echo $arr[0];
echo "<br><br>";

// for loop for array
$size = count($a);
for($i=0;$i < $size;$i++)
{
    asort($a);
    echo $a[$i]."\n";
}

echo "<br><br>";

// Associative array

$as = array("name" => "Gnaneswar","email" => "gnaneswar@gmail.com","mobile" => "8919110988");

print_r($as);

echo "<br><br>";

// MULTIDIMENSIONAL ARRAYS

$mul = array(
         
    array("name" => "Gnaneswar","email" => "Gnaneswar@gmail.com","mobile" => "8919110988"),
    array("name" => "Rupesh","email" => "Rupesh@gmail.com","mobile" => "7895874857"),
    array("name" => "Harish","email" => "Harish@gmail.com","mobile" => "9858974985"),

);

print_r($mul);

var_dump($mul);


echo "<br><br>";

//ARRAY FUNCTIONS

echo "<h2 style = 'color:red';>Array Functions</h2>";


// array change key case - it changes the key case 

$names=array("good"=>"comp","bad"=>"not");
print_r(array_change_key_case($names,CASE_UPPER));

echo "<br><br>";

//array chunk  - splits the array chunks of new arrays

$arr = array("good","morning","to","all","myguests");
print_r(array_chunk($arr,1));

echo "<br><br>";

// array coloumn - it returns the values of single column in the multidimensional array 

$task = [
    ["name" => "gowtham","email"=> "gowtham@gmail.com"],
    ["name" => "Naveen","email"=> "naveen@gmail.com"],
    ["name" => "rajesh","email"=> "rajesh@gmail.com"],
    ["name" => "krishna","email"=> "krishna@gmail.com"]
];

$email = array_column($task,'email');
print_r($email);

echo "<br><br>";

// array combine  -  it creates an array by using elements of keys from one array and values from another.

$name = array("gowtham","Naveen");
$mobile = array("8959874857","9874568989");
print_r(array_combine($name,$mobile));

echo "<br><br>";

// array count values - it count the values in an array

print_r(array_count_values($arr));

echo "<br><br>";

// array diff - it returns the values which are diff from two arrays

$a1=array("a"=>"gowtham","b"=>"naveen","c"=>"rajesh","d"=>"krishna");
$a2=array("m"=>"gowtham","b"=>"naveen","c"=>"rajesh");

print_r(array_diff($a1,$a2));

echo "<br><br>";

// array diff asscoc - it returns the values and keys which are diff from two arrays

print_r(array_diff_assoc($a1,$a2));

echo "<br><br>";

// array diff key  - it returns the keys which are diff from two arrays

print_r(array_diff_key($a1,$a2));

echo "<br><br>";


function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

print_r(array_diff_uassoc($a1,$a2,"myfunction"));

echo "<br><br>";

// array fill - it fill the array with values

print_r(array_fill(4,1,"harsha"));
echo "<br>";
print_r($a1);

echo "<br><br>";

// array fill keys - fills the keys with values

$keys = array("1","2","3");
$a = array_fill_keys($keys,"Gnaneswar");
print_r($a);

// array filter - 

echo "<br><br>";
$dom = array(2,5,4,7,8,9);
print_r(array_filter($dom));

// array flip - it flips/exchanges all the keys with their associated values in an array.

echo "<br><br>";
print_r(array_flip($a1));

echo "<br><br>";

// array intersect - it returns the same values present in the two arrays.

print_r(array_intersect($a1,$a2));

echo "<br><br>";
print_r(array_intersect_assoc($a1,$a2));

echo "<br><br>";

// array intersect key - it reurns the same keys present in the two arrays
print_r(array_intersect_key($a1,$a2));

echo "<br><br>";

// array key exists  - it checks that the given key is present in the array or not.

$detail = array("naveen" => "25");

if(array_key_exists("naveen",$detail))
{
  echo "key value is present";
}
else{
  echo "null";
}


echo "<br><br>";

// array keys  -  returns the keys as an array containing all the keys of an array.
 
print_r(array_keys($detail));
echo "<br><br>";

// array map - 

function present($sum)
{

  if($sum == 3)
  {
    return "present";
  }
  return $sum;

}

$x = array(1,2,3,4);
print_r(array_map("present",$x));

echo "<br><br>";

// array merge  - it merges the two arrays into one array.
 
print_r(array_merge($a1,$a2));

echo "<br><br>";

print_r(array_merge_recursive($a1,$a2));

echo "<br><br>";

$i = array("somu","anjali","barath");
$i1 = array(5,1,5);

// array pad - it adds the specified no of elements into an array with a specified value.

print_r(array_pad($i,4,"kumar"));

echo "<br><br>";

// array pop - it deletes the last element of an array

array_pop($i);
print_r($i);


echo "<br><br>";

//array product  -  it calaulates and returna the product of an array
 
echo(array_product($i1));

echo "<br><br>";

// array push - it inserts the elements to the end of an array

array_push($i,"red","blue");
print_r($i);

echo "<br><br>";

// array rand - it displays the random keys from an array

print_r(array_rand($i1,2));


echo "<br><br>";

// array replace - replaces the values of the first array with values from the second array.

print_r(array_replace($i,$i1));

echo "<br><br>";

print_r(array_replace_recursive($i1,$i));

echo "<br><br>";

// array reverse -  returns an array in reverse order.

print_r(array_reverse($i));

echo "<br><br>";


// array search  - searches the values in the array and returns the key of the value.

print_r(array_search("anjali",$i));

echo "<br><br>";

//array shift - removes first element of an array and returns the removed element

print_r(array_shift($i));

echo "<br><br>";

// array slice - it returns the selected part of an array

print_r(array_slice($i,1));

echo "<br><br>";

// array splice -----  next

// array sum - retuns the sum of the all values in an array

print_r(array_sum($i1));

echo "<br><br>";

// array unique - it removes the duplicate values and returns the array.

$item = array("a" => "ten","b" => "ten","c" => "nine","d" => "nine");

print_r(array_unique($item));

echo "<br><br>";

// array unshift  - it inserts new elements into an array and the values will be added at the begining of array.

array_unshift($item,"zero");
print_r($item);

echo "<br><br>";

// array values - returns the values as an array containing all the values present in an array.

print_r(array_values($item));

echo "<br><br>";

// arsort - sorts an associative array in descending order,according to values.

arsort($a1);
print_r($a1);

echo "<br><br>";

// asort - sorts an associative array in ascending order,according to values.

asort($a1);
print_r($a1);


echo "<br><br>";

//krsort  -  sorts an associative array in descending order,according to keys.

krsort($item);
print_r($item);

echo "<br><br>";

//ksort  - sorts an associative array in ascending order,according to keys.

ksort($item);
print_r($item);

echo "<br><br>";

// sort - sorts an indexed array in ascending order.

//rsort - sorts an indexed array in descending order.

// shuffle - randomizes the order of the elements in the array.

// range -- ex: $num = range(0,5); print_r($num);

// sizeof  - returns the no of elements in an array.


// compact  -  it creates an array from variables and their values.

$store = "Grocery";
$strname = "Dmart";

$res = compact("store","strname");
print_r($res);


echo "<br><br>";

// count - returns the no fo elements in an array.

echo count($a1);
































?>






































