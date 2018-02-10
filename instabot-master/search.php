<!DOCTYPE html>
<html>
<head>
<style>


</style>
</head>
<body>


<?php

$log = $_GET["log"];
$pass = $_GET["pass"];
$ID = $_GET["ID"];

echo shell_exec('python3 /var/www/html/instaBot-master/instabot-master/botapplication_2.py -u '.$log.' -p '.$pass.' -w '.$ID.' 2>&1');



?>
</body>
</html>
