<?php

//Delete Directory
mkdir("test",0777,true);
sleep(3);       //auto delete after 3seconds later
rmdir("test");  //if file, can't Delete