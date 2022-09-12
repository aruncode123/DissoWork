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
	<title>Admin Centers</title>
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

    <!-- Center Table Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/centerTable.php' ?>

    <!-- Center Edit Modal Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/editCentersModal.php' ?>



	<!--  JS CDNS -->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

   

    <script type="text/javascript">
        $(document).ready(function(){
              $(".center-edit-btn").on("click",function(){
                var id=($(this).attr("id"));
                $.ajax({
                  type:"GET",
                  url:"Php/getSingleCenter.php",
                  data:{id:id},
                  success:function(data){
                    data=JSON.parse(data);
                    $("#updateCenterId").val(data[0].id)
                    $("#updateCenterName").val(data[0].centerName);
                    $("#updateCenterLocation").val(data[0].centerLocation);
                    $("#updateCenterAddress").val(data[0].centerAddress);
                    $("#updateCenterAveragePeople").val(data[0].centerAveragePeople);
                    $("#selectedVaccines").val(data[0].centerVaccines);
                  }
                });
              });
        });
    </script>

</body>
</html>