<?php 


 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
	case '1':
		echo "Monday";
		break;
	case '2':
		echo "Tuesday";
		break;
	case '3':
		echo "Wednesday";
		break;
	case '4':
		echo "Thursday";
		break;
	case '5':
		echo "Friday";
		break;
	case '6': 
		echo "Saturday";
		break;
	case '7':
		echo "Sunday";
		break;
	default:
		echo "Number doesn't correspond to a day of the week.";
		break;
 }

 if ($dayOfWeek == 1) {
 	echo "Monday";
 } elseif ($dayOfWeek == 2) {
 	echo "Tuesday";
 } elseif ($dayOfWeek == 3) {
 	echo "Wednesday";
 } elseif ($dayOfWeek == 4) {
 	echo "Thursday";
 } elseif ($dayOfWeek == 5) {
 	echo "Friday";
 } elseif ($dayOfWeek == 6) {
 	echo "Saturday";
 } elseif ($dayOfWeek == 7) {
 	echo "Sunday";
 } else {
 	echo "Number doesn't correspond to a day of the week.";
 }
