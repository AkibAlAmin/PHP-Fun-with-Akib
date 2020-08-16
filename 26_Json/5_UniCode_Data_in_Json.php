<?php 
$unicodeData = [
    "country"=>"বাংলাদেশ"
];
echo json_encode($unicodeData, JSON_UNESCAPED_UNICODE);

echo"\n";
//echo json_encode($unicodeData);