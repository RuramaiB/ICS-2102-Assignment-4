<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enquiries.css">
    <title>Check Response</title>
</head>
<body>
    <div class="response">
        <label for="response-heading" id = "enq-heading">Check Enquiry</label>
        <form class = "response-form" action ="check.php" name="Response" onsubmit="return validateForm()" method="post">
            <input type="text" id = "response-name"name = "email" placeholder="Enter your email"><br>
            <input id = "response-submit" type="submit" value="Check Response">
        </form>
    </div>
</body>
</html>

<script>

</script>