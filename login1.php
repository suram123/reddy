<?php
include 'connect.php';
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$query = "select password from login where username=\"$myusername\"";
$result = mysqli_query($dbh,$query)
or die ('Error executing the query'.mysqli_error($dbh));
$row = mysqli_fetch_array($result);
if($row['password'] == $mypassword)
{
echo('successfully logged in');
}
else
{
header('Location:login.html?err=1');
}
?>
