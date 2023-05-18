<?php
$defult_lat = 54;
$defult_lon = 50;
$user_lat;
$lat = $user_lat ?? $defult_lat;
echo $lat;
if (isset($user_lat)) {
	echo $lat=$user_lat;
} else {
	echo $lat=$defult_lat;
}
