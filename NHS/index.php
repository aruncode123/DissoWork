<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- MAIN STYLE SHEET -->
    <link href="Css/style.css" rel="stylesheet">

    <!-- FONT AWESOME CDN -->
    <script src="https://use.fontawesome.com/17dd0dd65e.js"></script>


</head>
<body>


     <!-- Header Code included from seperate file to increade read ability of code and easy understandable.-->
    <?php include 'Components/header.php' ?>

    <!-- Banner Image and some serives side by side-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="Images/banner.jpeg" class="img-fluid w-100">
            </div>
            <div class="col-lg-6 card-text">
                <h2>NHS Services</h2>
                <ul>
                    <li class="mt-4"><h5>NHS....</h5></li>
                    <li class="mt-4"><h5>NHS....</h5></li>
                    <li class="mt-4"><h5>NHS....</h5></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Showing Locations and vaccines by fetching data from database and kept these functionality code in sepaarate file for code readablity-->

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-6">
               <?php include 'Components/locationList.php' ?>
            </div>
            <div class="col-lg-6 card-text">
               <?php include 'Components/vaccineList.php' ?>
            </div>
        </div>

    </div>




	<!--  JS CDNS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
