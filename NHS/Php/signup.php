<!-- Sign up functionality Code -->


<?php


  // including database connection file

  include 'dbConnect.php';

  // checking if desired btn fired the function
  if(isset($_POST["signup"]))
  {

    // checking if desired values are available in post array or not
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"]))
    {
       // saving values into variables from post array
      $Name =mysqli_real_escape_string($connection, $_POST["name"]);   
      $Email =mysqli_real_escape_string($connection, $_POST["email"]);
      $Password= mysqli_real_escape_string($connection,$_POST["password"]);
      $confirmPassword =mysqli_real_escape_string($connection, $_POST["confirmPassword"]);
      
      if($Password===$confirmPassword)
      {
          // writting sql query to insert values from variables to database
        $q ="INSERT INTO users (name,email,password,is_admin) VALUES ('$Name','$Email','$Password','0')";

        //executing sql query
        $r = mysqli_query($connection,$q);
        if(isset($r) && $r!="")
        {
          echo "<script>";
          echo "alert('Registered successfully!');";
          echo "window.location = '../login.php';"; 
          echo "</script>";
        }
        else
        {
          echo "<script>";
          echo "alert('Some Error Occured');";
          echo "window.location = '../signup.php';"; 
          echo "</script>";
        }
      }
      else
      {
        echo "<script>";
        echo "alert('Both Passwords should be same');";
        echo "window.location = '../signup.php';"; 
        echo "</script>";
      }
    }
    else
    {
      echo "<script>";
      echo "alert('Please fill out all the input fields');";
      echo "window.location = '../signup.php';"; 
      echo "</script>";
    }
  }
?>