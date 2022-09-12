<!-- Piece of code that delete value in database -->


<?php

include 'dbConnect.php';

$locationId=$_GET["id"];

$sql = "DELETE FROM Locations WHERE id='" . $locationId . "'";

if (mysqli_query($connection, $sql)) {
    echo "<script>";
    echo "alert('Succesfully deleted Location');";
    echo "window.location = '../locations.php';"; 
    echo "</script>";
} else {
    echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../locations.php';"; 
      echo "</script>";
}

?>