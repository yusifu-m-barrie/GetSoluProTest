<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="jquery-1.8.3.min.js"></script>
    <style>
        body{ 
    font: 14px sans-serif;
     text-align: center; 
    }
        .center {
     display: block;
     margin-left: auto;
     margin-right: auto;
     width: 30%;
    }
    </style>
    
</head>
<body>

<br><br>
<img src="" id="img" class="center">

<br><br>

Type in a URL to an image below :
<br><br>

<input type="text" id="url"/><input type="button" id="btn" value="show image" />




<script>
    $('#btn').on('click', function() {
$('#img').attr('src', $('#url').val());
});
</script>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to my Test site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>