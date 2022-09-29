<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account.css">
    <script defer src="script.js"></script>
    <title>Laptop Sellers Admin Login</title>
</head>
<body id ="body">
 <div class="account-wrapper">
    <div class="header">
        <h1>Laptop Sellers Admin Login</h1>
    </div>
    <form id="accountform" action = "loginForm.php" method="post">
        <input type="text" name="username" class = "account-input" placeholder="Enter your username"><br>
        <input type="password" name="password" class = "account-input" placeholder="Enter your password"><br>
       <button id = "submit-btn" onclick="validateLogin()">Login</button><br>
       <p>Go to home page   <a href="index.php"> Home </a></p>
    </form>
 </div>
</body>
</html>