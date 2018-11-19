<?php
	include('session.php');
	//include('includes/connection.php');
	unset($_SESSION['uid']);
	//unset($_SESSION['user_typer']);
	session_destroy();
	header('location:../index.php');
?>
