<?php
class Dir{
    private $directories=[];
    private $files=[];
    private $path;
    private $directoryObjects=[];
    function __construct($path){
        if(is_readable($path)){
            $this->path = $path;
            $entries = scandir($path);
            foreach($entries as $entry){
                if("."!=$entry && ".." != $entry){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->directories,$entry);
                    }else{
                        array_push($this->files,$entry);
                    }
                }
            }
        }
    }


    function getDirectories(){
        return $this->directories;
    }

    function getFiles(){
        return $this->files;
    }
}

$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFiles());
