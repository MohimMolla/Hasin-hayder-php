<?php
$x=500;
$y=70;
function myFun($x,$y) {
	if ($x>$y) {return 1;}
	elseif($x==$y) {return 0;}
	elseif($x<$y){return -1;}
}
if(myFun($x,$y)==1) {
	echo "$x is greater than $y";
}
elseif(myFun($x,$y)==0) {
	echo "$x is equal to $y";
}
elseif(myFun($x,$y)==-1){
	echo "$x is less than $y";
}
echo "<hr>";
$m=8;
$n=15;
$result=$x<=>$y;
if($result==1) {
	echo "$x is greater than $y";
}
elseif($result==0) {
	echo "$x is equle to $y";
}
elseif($result==-1){
	
	echo "$x is less than $y";
}
?>