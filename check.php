<?php
  include("config.php");
   session_start();
$Email =  $_REQUEST['email'];
// Performing insert query execution

$sql = "SELECT response FROM enquiries WHERE email='$Email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "". "". "Your response to your enquiry is ".  $row["response"]. "<br>";
  }
} else {
  echo "The enquiry hasn't been responded yet";
}
$conn->close();
