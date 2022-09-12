<!-- Piece of code that performs log out functionality -->

<?php
	session_start();
	
	//this page is for loggin out user
	$_SESSION = [];

	header("location:../../index.php");
?>