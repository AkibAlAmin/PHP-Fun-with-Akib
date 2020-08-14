<?php
print_r(glob("*/*/*.php"));     //as Like scandir()

print_r(glob("./*",GLOB_ONLYDIR));

print_r(glob("./{u,t}",GLOB_ONLYDIR | GLOB_BRACE));     //directory wit u,t letter

