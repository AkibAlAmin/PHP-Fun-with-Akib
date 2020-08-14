<?php

$info = " Abul Hasan 01021234567 akib.swe@gmail.com Dhaka";

$parts = sscanf($info, "%s %s %s %s %s", $fname, $lname, $mob, $email, $location);
echo $fname;
echo PHP_EOL;
echo $lname;
echo PHP_EOL;
echo $mob;
echo PHP_EOL;
echo $email;
echo PHP_EOL;
echo $location;
echo PHP_EOL;