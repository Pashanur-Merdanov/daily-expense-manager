<?php
session_start();
error_reporting(0);
include('db_connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br>
<a href="user-profile.php">
    <em class="fa fa-user">&nbsp;</em> Profile
</a>
<br>
 <a href="incomerep.php">
    <em class="fa fa-clone">&nbsp;</em> Change Password
</a>
<br>
<a href="login.php">
    <em class="fa fa-power-off">&nbsp;</em> Logout
</a>

</div>

</body>
</html>
