<?php
$fname="Mohim Molla";
$lname="Manager";
echo "My name is {$fname} and desegnation is {$lname} <br>";
echo "My name is ".$fname."and desegnation is". $lname." <br>";
printf("My name is %s and desegnation is %s <br>", strtoupper($fname),strtolower($lname) ) ;
printf("My name is %s and desegnation is %s <br>", strrev($fname),strlen($lname) ) ;
?>
<br>
<?php 
$name="Mohim Molla";
$age=25;
$age1="25";
$ag2=25.5;
$ag3=null;
$result=true;
var_dump($name );
echo "<br>";
var_dump($age);echo "<br>";

var_dump($age1);echo "<br>";
var_dump($ag2);echo "<br>";
var_dump($ag3);echo "<br>";
var_dump($result);
?>