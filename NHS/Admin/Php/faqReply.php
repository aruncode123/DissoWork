<!-- Piece of code that inserts value in database -->

<?php

session_start();

include 'dbConnect.php';


if(isset($_POST["replyFaq"]))
{
  if( isset($_POST["faqId"]) && isset($_POST["faqReply"]))
  {
    $FaqId = mysqli_real_escape_string($connection,$_POST["faqId"]); 
    $FaqReply = mysqli_real_escape_string($connection,$_POST["faqReply"]); 
    $FaqClosed = $_POST["closed"] != "" ? $_POST['closed'] : "0"; 
    $UserName=$_SESSION['user']['name'];
    
    $q ="INSERT INTO Replies(faqId,name,reply,is_closed) VALUES ('$FaqId','$UserName','$FaqReply','$FaqClosed')";
    
    $r = mysqli_query($connection,$q);
    if(isset($r) && $r!="")
    {
      echo "<script>";
      echo "alert('Succesfully Replied');";
      echo "window.location = '../faqs.php';"; 
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Some Error Occured');";
      echo "window.location = '../faqs.php';";
      echo "</script>";
    }
  }
}
?>