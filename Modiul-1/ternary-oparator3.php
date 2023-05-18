<?php
$year = 2020;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
	echo $year . " is leap year";
}
elseif($year % 4 == 0 && $year % 100 == 0)
{
	echo $year. " is a leap year";

}
elseif($year%4==0){
	echo $year. " is a leap year";

}
else{$year."Is not a leap year";}
?>
