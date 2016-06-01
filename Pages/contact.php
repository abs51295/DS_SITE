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
<link rel="stylesheet" href="../CSS/Stylesheet.css" type="text/css">
<title> Data Structure Visualization </title>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="index1.php">Home</a></li>
            <li><a href="Stack/Stack.php">Algorithms</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php" id="a">Contact</a></li>
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

<div class="content">

    <h1><strong>Our Contact Details</strong></h1>
    <table>
        <tr>
            <td><img src="../Images/aagam.jpg" alt="Aagam" class="author1" /></td>
            <td>Aagam Shah</td>
            <td>
                <p>Contact no: 8733910492</p>
                <p>Email-id: aagams68@gmail.com</p>
            </td>
        </tr>
        
        <tr>
            <td><img src="../Images/kiran.jpg" alt="Aagam" class="author1" /></td>
            <td>Kiran Shahdadpuri</td>
            <td>
                <p>Contact no: xxxxxxxxxx</p>
                <p>Email-id: kiranshahdadpuri@gmail.com</p>
            </td>
        </tr>
        
        <tr>
            <td><img src="../Images/shraddha.jpg" alt="Aagam" class="author1" /></td>
            <td>Shraddha Bhatt</td>
            <td>
                <p>Contact no: xxxxxxxxxx</p>
                <p>Email-id: shraddhabhatt198@gmail.com</p>
            </td>
        </tr>
        
        <tr>
            <td><img src="../Images/smit.jpg" alt="Aagam" class="author1" /></td>
            <td>Smit Shah</td>
            <td>
                <p>Contact no: 9408282928</p>
                <p>Email-id: smitsunny11@gmail.com</p>
            </td>
        </tr>
    </table>

</div>

    </div>
    </body>
</html>
