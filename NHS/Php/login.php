<!-- Login functionailty Code -->


<?php

    // starting session

    session_start();

    // including database connection file
    include 'dbConnect.php';

    if($connection)
    {

         // saving values into variables from post array
        $username= $_POST['email'];
        $password=$_POST['password'];

        // writting sql query to insert values from variables to database
        $query="select distinct * from users where email='$username' and password='$password'";

        //executing sql query
        $res=mysqli_query($connection,$query);
     
        if(mysqli_num_rows($res)>0)
        {
            //storing loggedin user data in session array
            $_SESSION['user']=mysqli_fetch_assoc($res);
            $_SESSION['just_logged']=true;

            //checking if loged in user is admin or not
            if($_SESSION['user']['is_admin']==='1')
            {
               header("location:../Admin/centers.php");
               exit();
            }
            header("location:../index.php");
        }
        else
        {
            $_SESSION['just_logged']=false;
            echo "<script>";
            echo "alert('Invalid Email or Password');";
            echo "window.location = '../login.php';"; 
            echo "</script>";
        }
    }
    else 
    {
    	echo "NOT CONNECTED";
    }
?>
