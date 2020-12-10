<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['iname'];
$name= ucwords(strtolower($name));
$email = $_POST['email'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);

$q3=mysqli_query($con,"INSERT INTO instructor(name,email,password) VALUES  ('$name' ,'$email' ,'$password')");

if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
header("location:index.php");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>