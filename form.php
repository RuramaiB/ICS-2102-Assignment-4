<?php
  include("config.php");
   session_start();
$Name =  $_REQUEST['name'];
$Number = $_REQUEST['number'];
$Email =  $_REQUEST['email'];
$Enquiry = $_REQUEST['enquiry']; 
// Performing insert query execution

$sql = "INSERT INTO enquiries VALUES ('$Name',
    '$Number','$Email','$Enquiry')";
if ($conn->query($sql) === TRUE) {
  header("location: enquiries.php");
  echo '<script>alert("Your enquiry has been sent.")</script>'; 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>