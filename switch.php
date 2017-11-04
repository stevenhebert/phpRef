<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>switch</title>

	</head>
	<body>

<?php

$a = 0;

switch($a) {
	case 0:
		echo "$a equals 0</br>";  //is the $var equal to this? if no, move to next statement
		break; //otherwise keeps executing after first successful case
	case 1:
		echo "$a equals 3</br>";
		break;
	case 2:
		echo "$a equals 0</br>";
		break;
	case 3:
		echo "$a equals 3</br>";
		break;
	default:
		echo "a is not 0, 1, 2, or 3 </br>";
}


$year = 2013;
switch (($year - 4) %12) {
	case 0: $zodiac = "Rat";      break;
	case 1: $zodiac = "Ox";       break;
	case 2: $zodiac = "Tiger";    break;
	case 3: $zodiac = "Rabbit";   break;
	case 4: $zodiac = "Dragon";   break;
	case 5: $zodiac = "Snake";    break;
	case 6: $zodiac = "Horse";    break;
	case 7: $zodiac = "Goat";     break;
	case 8: $zodiac = "Monkey";   break;
	case 9: $zodiac = "Rooster";  break;
	case 10: $zodiac = "Dog";     break;
	case 11: $zodiac = "Pig";     break;
}
echo "{$year} is the year of the {$zodiac}.";