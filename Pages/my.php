<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../index.html");
}

$a = $_SESSION['name']; 
 ?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/visualPages.css">
    <link rel="stylesheet" href="../CSS/Stylesheet.css">
    <title> Data Structure Visualization </title>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="index1.php">Home</a></li>
            <li><a href="Stack/Stack.php">Algorithms</a></li>
            <li><a href="about.php" >About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="my.php" id="a"><?php echo "$a";?></a></li>
        </ul>
    </div>
    <?php

    ?>
    <div class="content">
        <h1><strong>My Profile</strong></h1>
        <div class="myhead">

        </div>
    <form action="logout.php">
        <input type="submit" value="Logout"> 
    </form>
    </div>
    
</div>
</body>
</html>
