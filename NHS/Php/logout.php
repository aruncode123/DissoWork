<!-- Log out functionality code -->

<?php

    //starting session
	session_start();

    //making session array empty
	$_SESSION = [];


    //relocate to main page 
	header("location:../index.php");
?>