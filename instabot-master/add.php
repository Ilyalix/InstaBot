<!DOCTYPE html>
<html>
<head>
<style>


table {
    width: 100%;
    
}

table, td, th {
    border: 1px solid black;
 
}

th {text-align: left;}




</style>
</head>
<body>


<?php

$log = $_GET["log"];
$pass = $_GET["pass"];
$ID = $_GET["ID"];

$r = passthru('C:\apache\localhost\www\InstaBot\Bot\botapplication.py' -u '.$log.' -p '.$pass.' -w '.$ID.');


// $r = exec('mkdir C:\Document\test');


// $cmd = 'C:\apache\localhost\www\InstaBot\Bot\botapplication.py -u '.$log.' -p '.$pass.' -w '.$ID.'';

echo "string";

// echo $r;

?>
</body>
</html>
