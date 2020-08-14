<?php
mkdir("test/d1/d2/d3",0777,true);
file_put_contents("test/f.txt","hello");
sleep(10);
// unlink("test/f.txt");
// rmdir("test");
deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");

function deleteDir($path){
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                unlink($filePath);
                
            }
        }
    }
    rmdir($path);
}