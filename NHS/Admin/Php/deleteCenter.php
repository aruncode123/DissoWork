<!-- Piece of code that delete value in database -->

<?php

include 'dbConnect.php';

$centerId=$_GET["id"];

$sql = "DELETE FROM Centers WHERE id='" . $centerId . "'";

if (mysqli_query($connection, $sql)) {
    echo "<script>";
    echo "alert('Succesfully deleted Center');";
    echo "window.location = '../centers.php';"; 
    echo "</script>";
} else {
    echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../centers.php';"; 
      echo "</script>";
}

?>