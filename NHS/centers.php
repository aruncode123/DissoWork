<?php

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:login.php");
    }

    include 'Php/dbConnect.php';


    if(isset($_POST['search']))
    {
      $valueToSearch = $_POST['valueToSearch'];
      $query = "SELECT * FROM Centers WHERE centerLocation='$valueToSearch'";
      $search_result = mysqli_query($connection, $query);
    }
    else
    {

      $query = "SELECT * FROM Centers";
      $search_result = mysqli_query($connection, $query);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Centers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- MAIN STYLE SHEET -->
    <link href="css/style.css" rel="stylesheet">

    <!-- FONT AWESOME CDN -->
    <script src="https://use.fontawesome.com/17dd0dd65e.js"></script>


</head>
<body>

    <!-- Header Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/header.php' ?>



    <!-- Showing Centers Information by fetching data from database and applying search operation.Search functionality code is written on the top of this page.-->

    <section>
        <div class="container-fluid mt-5">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <form class="form-inline my-2 my-lg-0 pl-5" method="POST" action="">
                        <input class="form-control mr-sm-2 w-1oo" name="valueToSearch" placeholder="Search by Location">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h3>Centers</h3>
                </div>
            </div>
            <div class="row px-5">
                <?php 

                        while($row = mysqli_fetch_array($search_result))
                        { 
                            $id=$row["id"];
                  ?>
                    <div class="col-sm-3 border border-dark mr-2 mb-3 p-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-3 col-md-6">Name</div>
                            <div class="col-lg-6 col-sm-3 col-md-6"><?php  echo $row['centerName']; ?></div>
                            <div class="col-lg-6 col-sm-6 col-md-6">Address</div>
                            <div class="col-lg-6 col-sm-6 col-md-6 overflow-auto"><?php  echo $row['centerAddress']; ?></div>
                            <div class="col-lg-6 col-sm-6 col-md-6">Opening Hours</div>
                            <div class="col-lg-6 col-sm-6 col-md-6"><?php  echo substr($row['centerOpenTime'],0,5) ?> - <?php  echo substr($row['centerCloseTime'],0,5) ?></div>
                            <div class="col-lg-6 col-sm-6 col-md-6" >Vaccines Available</div>
                            <div class="col-lg-6 col-sm-6 col-md-6"  style="word-wrap: break-word;"><?php  echo rtrim($row['centerVaccines'],","); ?> </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">Center Status</div>
                            <div class="col-lg-6 col-sm-6 col-md-6"><?php  echo $row['centerStatus']; ?></div>
                            <div class="col-lg-6 col-sm-6 col-md-6">Average No. People</div>
                            <div class="col-lg-6 col-sm-6 col-md-6"><?php  echo $row['centerAveragePeople']; ?></div>
                        </div>
                    </div>
                <?php
                        }
                ?>
            </div>
        </div>
    </section>




    <!--  JS CDNS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>