<?php
$text = "Quick Brown fox jumps over the lazy dog";
$encode = base64_encode($text);
echo $encode."\n";
echo base64_decode($encode);