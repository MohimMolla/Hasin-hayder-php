<?php
for($x=1;$x<=10;$x++){
echo $x."<br/>";
echo PHP_EOL;
for ($j=1; $j <=$x ; $j++) { 
	echo "*";
}

}
echo "<br/>";
$i=0;
while($i<10){
	$i++;
	echo $i."<br/>";
}
echo "<br/>";
$m=11;
do{
$m++;
echo $m."<br/>";
}

while($m<20);
echo "<br/>";
echo "GO TO <br/>";
$n=21;
a:$n++;
echo $n."<br/>";
if($n<=30) goto a;
	




?>