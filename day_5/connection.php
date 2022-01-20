<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'lab_5';
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}