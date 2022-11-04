<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enquiries.css">
    <!-- <script defer src="script.js"></script> -->
    <script src="script.js"></script>
    <title>Enquiries</title>
</head>
<body id = "enq-body">
    <label for="Enq-heading" id = "enq-heading">Enquiries</label>
    <form class = "enq" action ="form.php" name="myForm" onsubmit="return validateForm()" method="post">
        <input type="text" name = "name" placeholder="Enter your name"><br>
        <input type="text" name="number" id="num" placeholder="Enter your number here"><br>
        <input type="email" name="email" id="" placeholder="Enter your email address"><br>
        <textarea name="enquiry" id="" cols="30" rows="10" placeholder="Please enter the enquiry"></textarea><br>
        <input type="submit" value="Submit">   
        <a href="checkResponse.php">Check Response</a>
    </form>
</body>
</html>
