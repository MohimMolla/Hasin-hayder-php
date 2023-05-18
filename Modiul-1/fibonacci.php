<?php
$fibbo = [0, 1];
for ($i = 2; $i < 10; $i++) {
	$fibbo[$i] = $fibbo[$i - 1] + $fibbo[$i - 2];	
}
foreach ($fibbo as $f)
		echo $f . "<br/>";
