<?php
//connect.php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ftest';
if(!mysqli_connect($server, $username, $password))
{
  exit('Error: could not establish database connection');
}
if (!mysqli_select_db($database))
{
  exit('Error: could not select the database');
}
?>