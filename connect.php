<?php

$host='localhost';
$username='election';
$user='root';
$password='tiger';

$dbh=mysqli_connect($host,$user,$password,$username) or die("error connecting to the database'.mysqli_connect_error($dbh));
?>
