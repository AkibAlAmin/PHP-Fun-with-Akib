<?php

$string = "     hello,\n";
$string = trim($string, " \n");
echo $string;

//trim/rtrim/ltrim


//String Wordwrap
$string1 = "quick brown fox jumps over the lazy dog";
echo wordwrap($string1,12);

//String to HTML
//browser \n bujhena. need to: echo nl2br($string);