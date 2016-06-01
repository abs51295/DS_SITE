<?php
/**
 * Created by PhpStorm.
 * User: ABS - VIRUS
 * Date: 4/6/2016
 * Time: 11:39 PM
 */
session_start();
$username = $_POST['signup_username'];
$name = $_POST['field_1'];
$email = $_POST['signup_email'];
$pass = $_POST['signup_password'];

 $db = mysqli_connect('localhost','root','aagam','aagam') or die('Problem with connection');


$query1 = "INSERT INTO login VALUES ('$email','$name','$pass','$username')";
$query2 = "SELECT * FROM login WHERE email='$email'";
$query3 = "select * from user WHERE username='$username'";

$myresult = mysqli_query($db,$query2) or die('error at query2');
$myresult1 = mysqli_query($db,$query3) or die('error at query3');


if($myresult->num_rows > 0 || $myresult1->num_rows > 0){
    echo "<script type=text/javascript> alert('Email id/Username already exists. Please enter valid username or email id'); window.location='index.html'</script>";
    exit;
}
$result = mysqli_query($db,$query1)or die('error at query1');
$_SESSION["name"]=$name;
header("Location:Pages/index1.php");

