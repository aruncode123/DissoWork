<?php

session_start();
if(!isset($_SESSION['user']) )
header("location:../login.php");

if($_SESSION['user']['is_admin']!='1')
header("location:../index.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Vaccines</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- MAIN STYLE SHEET -->
    <link href="Css/style.css" rel="stylesheet">

    <!-- FONT AWESOME CDN -->
    <script src="https://use.fontawesome.com/17dd0dd65e.js"></script>

</head>
<body>
     
    <!-- Sidebar Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/sidebar.php' ?>

    <!-- Vaccine add form Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/addVaccine.php' ?>


	<!--  JS CDNS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>