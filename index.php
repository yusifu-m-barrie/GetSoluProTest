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

    .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    </style>

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