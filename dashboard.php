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
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body{
            margin: 0;
            padding: 0;
            background:url("img/1.jpg");
            background-size:cover;
        }
        table {
            margin: 0 auto;
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
            margin-bottom: 25vh;
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
    </style>
</head>
 
<body>
    <section>
        <div class="navbar">
            <h2>Enquiries</h2>
            <a href="logout.php">Logout</a>
        </div>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email address</th>
                <th>Enquiry</th>
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
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>