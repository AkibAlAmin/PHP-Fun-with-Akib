<?php
//Create Directory with File
mkdir("test",0777,true);
file_put_contents("test/f.txt","Hello");