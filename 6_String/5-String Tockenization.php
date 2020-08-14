<?php
$string = "Hello world, How are you";

$parts = explode( " ", $string );
print_r( $parts );
echo PHP_EOL;

$original = join( " ", $parts );
print_r( $original ); //join/implode

//Each letter
$parts2 = str_split( $string );
print_r( $parts2 );

//Each word
$parts3 = strtok( $string, " ," );
while ( $parts3 !== false ) {
    echo $parts3 . "\n";
    $parts3 = strtok( " ," );
}

$parts5 = preg_split( "/ |,/", $string );
print_r( $parts5 );
