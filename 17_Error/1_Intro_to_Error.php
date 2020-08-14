<?php

error_reporting(0);             //Error Do not Show
error_reporting(E_NOTICE );     //Only Notice error Show
error_reporting(E_WARNING);     //Only Warning error Show
error_reporting(E_ALL);         //all Show
error_reporting(E_WARNING | E_NOTICE);


echo 12/0;
echo $book;

// echo get_cfg_var("cfg_file_path");