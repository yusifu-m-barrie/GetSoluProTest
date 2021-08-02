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
    <link rel="stylesheet" href="style.css">
    <script src="jquery-1.8.3.min.js"></script>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="reset-password.php">Reset Your Password</a>
  <a href="logout.php">Sign Out of Your Account</a>
</div>

<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to my Test site.</h1>
    
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
    
</body>
</html>