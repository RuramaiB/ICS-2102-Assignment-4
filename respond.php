<?php
  include("config.php");
//    session_start();
$email =  $_REQUEST['email'];   
$response =  $_REQUEST['response'];
// Performing update query execution
    $sql = "UPDATE enquiries SET response ='$response' WHERE email = '$email'";
    if(mysqli_query($conn, $sql)){
        echo "Record was updated successfully.";
    }
 
$conn->close();