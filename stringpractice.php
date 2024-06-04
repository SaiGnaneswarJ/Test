<?php

ini_set('display_errors',1);

// $str = "GOOD";
// $str1 = 20;

// $arr = array("a"=>"good","b"=>"bad");

// print($str);

// echo $str,$str1;

// var_dump($str);

// print_r($str);

// echo "<br><br>";

// echo $arr;

// print $arr;

// var_dump($arr);

// print_r($arr);


$str = "Welcome 'to' the world";
$str1 = "welcome [good] morning";
echo addcslashes($str,"t");
echo "<br>";
echo addslashes($str);
echo "<br>";
echo bin2hex($str);
echo "<br>";
echo chop($str,"world");
echo "<br>";
echo chr(52);
echo "<br>";
echo chunk_split($str,7,"-");
echo "<br>";
echo convert_uuencode($str);
echo "<br>";
echo convert_uudecode("6=V5L8V]M92`G=&\G('1H92!W;W)L9``` `");
echo "<br>";
echo count_chars($str,3);
echo "<br>";
echo crc32($str);
echo "<br>";
// echo crypt($str);
echo "<br>";
print_r(explode("'",$str));
echo "<br>";
// print_r(get_html_translation_table());
echo "<br>";
echo hex2bin("77656c636f6d652027746f272074686520776f726c64");
echo "<br>";
echo htmlentities($str);
echo "<br>";
echo htmlspecialchars($str1);
echo "<br>";
$arr = array("hi","hi..","hi...");
echo implode($arr);
echo "<br>";
echo join($arr);
echo "<br>";
echo lcfirst($str);
echo "<br>";
echo ltrim($str,"Welcome");
echo "<br>";
echo metaphone($str);
echo "<br>";
echo nl2br("hello.\n welcome Gnaneswar!");
echo "<br>";
parse_str("name=Gnaneswar&email=gnaneswar@gmail.com&mobile=8919110988",$a);
print_r($a);
echo "<br>";
echo quotemeta($str1);
echo "<br>";
echo similar_text("good morning","good afternoon");
echo "<br>";
echo str_pad($str,25,"!");
echo "<br>";
echo str_repeat($str,2);
echo "<br>";
echo str_replace("world","Hyderabad",$str);
echo "<br>";
echo str_shuffle($str);
echo "<br>";
print_r(str_split($str,10));
echo "<br>";
echo str_word_count($str);
echo "<br>";
echo strcasecmp("Hello","hello");
echo "<br>";
echo strchr($str,"world");
echo "<br>";
echo strcspn($str,"t");
echo "<br>";
echo strpos($str,"the");
echo "<br>";
echo strlen($str);
echo "<br>";
echo strpbrk($str,"h");
echo "<br>";
echo strrev($str);
echo "<br>";
echo strtr($str,"w","h");
echo "<br>";
echo substr($str,10);
echo "<br>";
echo trim($str);
echo "<br>";
echo strtolower($str);
echo "<br>";
echo strtoupper($str);
echo "<br>";
echo ucfirst($str);
echo "<br>";
echo lcfirst($str);
echo "<br>";
echo wordwrap($str,6,"<br>\n");










?>