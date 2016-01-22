<?php
include 'db.php';
clearstatcache();
session_start(); // Starting Session    

ini_set('error_reporting', E_ALL);
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "username/password are blank";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Define $username and $password
// To protect postgresql injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = pg_escape_string($username);   
$password = pg_escape_string($password);
$_SESSION['userName'] = $username;
$db = pg_connect("host=localhost dbname=ladder user=postgres password=iw72SqCG") or die('Error 1000: ' . pg_last_error());

echo $username;
echo session_id();
// postgres query to fetch information of registerd users and finds user match.
$query = pg_query("select * from player where password='$password' AND username='$username'");
$rows = pg_num_rows($query);
if ($rows == 1) 
{
header("location: ../playladder.php"); // Redirecting To Other Page
echo $_SESSION['userName'];
} 
    else 
{
$error = "Error with username/password";

}
}
}   
?>