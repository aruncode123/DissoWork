<!-- Piece of code that delete value in database -->

<?php

include 'dbConnect.php';

$vaccineId=$_GET["id"];

$sql = "DELETE FROM Vaccines WHERE id='" . $vaccineId . "'";

if (mysqli_query($connection, $sql)) {
    echo "<script>";
    echo "alert('Succesfully deleted Vaccine');";
    echo "window.location = '../vaccines.php';"; 
    echo "</script>";
} else {
    echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../vaccines.php';"; 
      echo "</script>";
}

?>