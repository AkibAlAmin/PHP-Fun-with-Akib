<?php
//File & Directory Separately
$entries = scandir(getcwd());
foreach($entries as $entry){
    if("."!=$entry && ".." != $entry){
        if(is_dir($entry)){
            echo "[directory] {$entry} \n";
        }else{
            echo "[file] {$entry} \n";
        }
    }
}