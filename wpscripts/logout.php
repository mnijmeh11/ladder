<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	unset($_SESSION);
	session_destroy();
	session_write_close();
header("Location: ../seeyoulater.php"); // Redirecting To Home Page
die;
}
?>