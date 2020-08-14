<?php

$name = 0;

if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name set & not empty";
}
else{
    echo "Name not set or empty";
};