<!-- Piece of code that delete value in database -->

<?php

include 'dbConnect.php';

$newsId=$_GET["id"];

$sql = "DELETE FROM News WHERE id='" . $newsId . "'";

if (mysqli_query($connection, $sql)) {
    echo "<script>";
    echo "alert('Succesfully deleted News');";
    echo "window.location = '../news.php';"; 
    echo "</script>";
} else {
    echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../news.php';"; 
      echo "</script>";
}

?>