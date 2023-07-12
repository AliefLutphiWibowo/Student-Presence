<?php
 
 $dbHost = 'localhost';
 $dbName = 'db_presensi';
 $dbUsername = 'root';
 $dbPassword = '';

 $mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
?>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_presensi");
?>