<?php
/**
 * Created by PhpStorm.
 * User: ABS - VIRUS
 * Date: 4/6/2016
 * Time: 10:13 PM
 */
session_start();
$user_name = $_POST['log'];
$pass = $_POST['pwd'];

//if (!$user_name || !$pass) {
  //  echo 'You have not entered details. Please go back and try again';
   // exit;
//}

$db = mysqli_connect('localhost','root','aagam','aagam') or die('error at connecting');

$query = "SELECT * FROM  login  WHERE user_name='$user_name' AND password='$pass'";
$result = mysqli_query($db,$query);

if($result->num_rows == 0){
    echo "<script type=text/javascript> alert('Please enter valid login details'); window.location='index.html' </script>";
    exit;
}
$query1 = "select Name from login where user_name='$user_name'";
$result1 = mysqli_query($db,$query1);
if($row = mysqli_fetch_array($result1)){
    $_SESSION["name"] = $row['Name'];
}

header("Location:Pages/index1.php");