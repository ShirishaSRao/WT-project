<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>