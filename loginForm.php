<?php
 
include("config.php");
session_start();

   // username and password sent from form 
     $Username=mysqli_real_escape_string($conn,$_POST['username']); 
     $Password=mysqli_real_escape_string($conn,$_POST['password']); 
 
     $sql="SELECT * FROM Users WHERE Username='$Username' AND Password ='$Password'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active=$row['active'];
 
     $count=mysqli_num_rows($result);
 
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1)
    {
    //  session_register("Username");
     $_SESSION['login_user']=$Username;
 
     header("location: dashboard.php");
    }
    else 
    {
    $error="Your Login Name or Password is invalid";
    }
?>