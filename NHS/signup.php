<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Sign up</title>
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


    <?php include 'Components/header.php' ?>



    <div class="container mt-5">
        <div class="row pt-5">
            <div class="col-sm-6">
                <img class="img-fluid w-100" src="Images/nhs.jpeg" />
            </div>
            <div class="col-sm-6">
                <h3 class="text-center my-1">Sign up Here</h3>
                <?php include 'Components/signupForm.php' ?>
            </div>
        </div>
    </div>


    <!--  JS CDNS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     <!--including database connection file, writting sql query for showing comments,executing query to get the desired results,checking if results have data or not -->

</body>
</html>
