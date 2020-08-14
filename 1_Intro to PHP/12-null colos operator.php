<?php

//$user_lat = 12.43;
$user_long = 43.41;

$default_lat = 23.9;

$lat = $user_lat ??  $default_lat;

echo $lat;

//It will happen in only php 7 version. 