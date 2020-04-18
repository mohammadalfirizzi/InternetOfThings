<?php 
$content = file_get_contents("http://blynk-cloud.com/u-IDJZHRFpfZqF-UKWVKHk_ByP77Hs5n/get/v6");

$result  = json_decode($content);
echo json_decode($result[0]);
?>