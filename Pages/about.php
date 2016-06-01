<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../index.html");
}

$a =$_SESSION['name']; 
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
            <li><a href="about.php" id="a">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="my.php"><?php echo "$a";?></a></li>
        </ul>
    </div>
    <!--<div class="menu">
        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="Home.php">Algorithms</a></li>
            <li><a href="faq.php"> F.A.Q </a></li>
            <li><a href="contact.php"> Contact </a></li>
        </ul>

        <br> <br>
        <div class="about">
            <a href="https://profiles.udacity.com/u/aagamshah" target="_blank"> Aagam Shah </a> <br>
            <a href="http://ldce.ac.in/departments/computer-engineering" target="_blank"> Computer Science </a> <br>
            <a href="http://ldce.ac.in" target="_blank"> L.D. COLLEGE OF ENGINEERING </a>
        </div>

    </div>
    -->
    <br />
    <div class="content">
        <h1><strong> Project undertaken by</strong></h1>
    <table cellpadding="50px">
        <tr>
            <td><img src="../Images/aagam.jpg" alt="Aagam" class="author" /></td>
            <td>
                <p>Aagam Shah</p>
                <p>L.D. College of Engineering</p>
                <p>Computer Science</p>
                <p>3rd Year</p>
            </td>
        </tr>    
        <tr>
            <td><img src="../Images/kiran.jpg" alt="Kiran" class="author" /></td>
            <td>
                <p>Kiran Shahdadpuri</p>
                <p>L.D. College of Engineering</p>
                <p>Computer Science</p>
                <p>3rd Year</p>
            </td>
        </tr>    
        
        <tr>
            <td><img src="../Images/shraddha.jpg" alt="shraddha" class="author" /></td>
            <td>
                <p>Shraddha Bhatt</p>
                <p>L.D. College of Engineering</p>
                <p>Computer Science</p>
                <p>3rd Year</p>
            </td>
        </tr>    
        
        <tr>
            <td><img src="../Images/smit.jpg" alt="smit" class="author" /></td>
            <td>
                <p>Smit Shah</p>
                <p>L.D. College of Engineering</p>
                <p>Computer Science</p>
                <p>3rd Year</p>
            </td>
        </tr>    
    </table>

</div>
    
</div>
</body>
</html>
