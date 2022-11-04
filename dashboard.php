<!-- PHP code to establish connection with the localserver -->
<?php
 
include("config.php");
session_start();
// Checking for connections
 
// SQL query to select data from database
$sql = " SELECT * FROM enquiries";
$result=mysqli_query($conn,$sql);
$conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laptop Sellers City Dashboard</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:rgb(233, 233, 233);
        }
        .dashboard{
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }
        .table{
            width: 70%;
        }
        table {
            margin-left:50px;
            margin-top:100px;
            font-size: large;
            border: 1px solid black;
            
        }
 
        td {

            border: 0.5px solid black;
        }
 
        th,
        td {
            background-color: white;
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        .navbar{
            background-color: black;
            color: white;
            padding: 10px;
            margin-bottom: 10vh;
        }
        .navbar h1{
            float:left;
        }
        .navbar a{
            float: right;
            text-decoration: none;
            color: rgb(49, 143, 231);
            font-size: 20px;
            cursor: pointer;
            margin-top: -35px;
        }
        .Updateresponse{
    width: 25%;
    background-color: black;
    border-radius: 20px;
    padding: 10px;
    opacity: 90%;
    height: 35vh;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
   }
   #response-email, #response{
    margin-top: 30px;
    height: 30px;
    background-color: transparent;
    border-bottom-color: black;
    margin-bottom: 20px;
   }
    #response-email, #response:focus{
        color: white;
    }
     #response-email, #response:placeholder{
        color: white;
     }
 #response-submit{
    height: 40px;
    width: 120px;
    border-radius: 20px;
    background-color: white;
    color: black;
 }
    </style>
</head>
 
<body>
    <section>
        <div class="navbar">
            <h2>Enquiries</h2>
            <a href="logout.php">Logout</a>
        </div>
        <div class="dashboard">
            <div class="table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email address</th>
                        <th>Enquiry</th>
                        <th>Response</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['number'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['enquiry'];?></td>
                        <td><?php echo $rows['response'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        
        <div class="Updateresponse">
        <label for="response-heading" id = "enq-heading">Update Enquiry</label>
        <form class = "response-enquiry" action ="respond.php" name="Response" onsubmit="return validateForm()" method="post">
            <input type="text" id = "response-email"name = "email" placeholder="Enter your email"><br>
            <input type="text" id = "response"name = "response" placeholder="Update response"><br>
            <input id = "response-submit" type="submit" value="Update Response">
        </form>
        </div>
        
    </div>
    </section>
</body>
 
</html>