<?php

// DATE FUNCTIONS

// Checkdate()  -  it checks the gregorian date and returns true when date is correct  else  returns fale 

var_dump(checkdate(21,21,2024));
echo "<br>";
var_dump(checkdate(02,07,2024));

echo "<br><br>";

//date add -- adds some days,years,time,months to a date with interval
// date_interval_create_from_date_string() --  sets up a DateInterval from the relative parts of the string.

$date = date_create("2024-02-07");
date_add($date,date_interval_create_from_date_string("2 months"));
echo date_format($date,"y-m-d");

echo "<br><br>";


// date create from format   -   returns a new date accroding to the specific format

$d = date_create_from_format("Y-M-d","2024-FEB-07");
echo date_format($d,"d-m-y");

echo "<br><br>";

// date_create()   -   it creates a date and time format and returns it based on the format.

$dat = date_create();
echo $dat->format('Y-m-d H:i:s');

echo "<br><br>";


//date_date_set()-- to set the date -- date_date_set(object,year,mon,day)

$date1 = date_create();
date_date_set($date1,2024,12,25);
echo date_format($date1,"y-m-d");


echo "<br><br>";


// date_default_timezone_get()  -  it returns the default time zone where the script is running

echo date_default_timezone_get();

echo "<br><br>";

//date_default_timezone_set()  -  it sets the timezone

date_default_timezone_set("Asia/Calcutta");

echo date_default_timezone_get();

echo "<br><br>";

// date_diff()  -  it returns the difference between the two dates

$a1 = date_create("2022-05-07");
$a2 = date_create("2024-02-07");
$diff = date_diff($a1,$a2);
echo $diff->format("%a days");

echo "<br><br>";

//date_isodate_set()  -  which sets the date according to the ISO 8601 standard. date_isodate_set(object, year, week, day)

$date2=date_create();
date_isodate_set($date2,2024,2);
echo date_format($date2,"Y-m-d");

echo "<br><br>";

// date modify -  it modifies the date based on the interval date_modify($string,modify)

$s = date_create("2024-01-09");
date_modify($s," - 2 days");
echo date_format($s,"d-m-y");

echo "<br><br>";


// date parse  -- returns an associative array with detailed information of the specific date.

print_r(date_parse("2024-02-07 12:02:50"));

echo "<br><br>";

//date_parse_from_format   --   returns an associative array with detailed information of the specific date. according to the format.

print_r(date_parse_from_format("ddmmyyyy","07022024"));

echo "<br><br>";

// date_sub() - Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime

$date3 = date_create("2024-02-07");
date_sub($date3,date_interval_create_from_date_string("2 months"));
echo date_format($date3,"y-m-d");

echo "<br><br>";

echo date("l\n");
echo date("d-m-y\n");
echo time();


echo "<br><br>";

