<?php
include('db_connect.php');
 $host="localhost";
 $user="root";
 $passwd="";
 $db="pashanur_homework";
$con=mysqli_connect($host,$user,$passwd,$db);
$time=date('Y-m-d');
$date=$time;
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
  }
$username=$_POST['username'];
$pass=$_POST['password'];
$password=md5($pass);
$confirm=$_POST['password2'];
$sql = "INSERT into info(`gender`, `username`, `adress`, `date`, `phone` , `email` , `city` , `password`) VALUES ('".$_POST["gender"]."','".$_POST["username"]."','".$_POST["adress"]."','$date','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["city"]."', '$password')";

if($confirm==$pass){
if(mysqli_query($con, $sql)){
  echo "<b><center>You registered succesfully</center></b>";
  header("Refresh:1; url=./login.php? username=$username&password=$password");
}
 else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }
}
else{
  echo "Passwords do not match , please register again";
  header("Refresh: 1; url=./index.php? username=$username&password=$password");
}
?>