

<?php 

  require_once('dbConnect.php');

  $sql = "SELECT * FROM Centers WHERE id='" .$_GET["id"]. "'";
  $record = mysqli_query($connection,$sql);
  while($row = mysqli_fetch_assoc($record))
  { 
    $data[] = $row;
  }
  echo json_encode($data);     
?>