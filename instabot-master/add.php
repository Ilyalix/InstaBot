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

echo shell_exec('python3 /var/www/html/instaBot-master/instabot-master/botapplication.py -u '.$log.' -p '.$pass.' -w '.$ID.' 2>&1');

// shell_exec('python /var/www/html/instaBot-master/instabot-master/botapplication.py -u '.$log.' -p '.$pass.' -w '.$ID.'');

// echo shell_exec("python /var/www/html/instaBot-master/instabot-master/mkdir.py 2>&1");


// $cmd = 'C:\apache\localhost\www\InstaBot\Bot\botapplication.py -u '.$log.' -p '.$pass.' -w '.$ID.'';

//echo "string";

// echo $r;

?>
</body>
</html>
