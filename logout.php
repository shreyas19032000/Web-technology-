<?php
session_start();
if(isset($_SESSION['uid']))
{
	session_destroy();
	unset($_SESSION['uname']);
	unset($_SESSION['uid']);
	header("Location:home.php");
}
