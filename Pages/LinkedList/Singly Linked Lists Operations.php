<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../../index.html");
}

$a = $_SESSION['name']; 
 ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Singly Linked List Operations</title>
        <link href="../../CSS/StyleSheet.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../CSS/visualPages.css">
        <script src="../../JS/Script.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="header"><h1>Data Structures</h1> </div>
        <div class="menu">
        <ul>
        <li> <a href="../about.php">About</a> </li>
        <li> <a href="../Home.php">Algorithms</a> </li>
        <li> <a href="../faq.php"> F.A.Q </a> </li>
        <li> <a href="../contact.php"> Contact </a> </li>
        </ul>

            <br> <br>
        <div class="about">
        <a href="https://profiles.udacity.com/u/aagamshah" target="_blank"> Aagam Shah </a> <br>
        <a href="http://ldce.ac.in/departments/computer-engineering" target="_blank"> Computer Science </a> <br>
        <a href="http://ldce.ac.in" target="_blank"> L.D. COLLEGE OF ENGINEERING </a>  
        </div>

        </div>
        <div class="content">
        <h1><strong>Singly Linked Lists</strong></h1>
        <fieldset>
            <legend><strong>Operations</strong></legend>
            <div>
                There are Three Basic Operations on Singly Linked Lists:
                <ol>
                    <li><a href="Singly Insertion.php">Insertion</a></li>
                    <li><a href="Singly Deletion.php">Deletion</a></li>
                    <li><a href="Singly Search.php">Search</a></li>
                </ol>
            </div>
        </fieldset>
        <br>
        <fieldset>
            <legend><strong>Comments</strong></legend>           
                <label for="name">Name: </label>
                <input type="text" required id="name"> <br> <br>
                <label for="email">Email: </label>
                <input type="text" required id="email"> <br> <br>
                <label for="comment">Comment: </label>
                <input type="text" required id="comment"> <br> <br>
                <input type="submit" value="Comment!!" onclick="a()">    
            <div id="lol">
            </div>
        </fieldset>

         <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br>   <br> <br> <br> <br>
        </div>
          <div class="footer">Copyright 2016 <a href = "https://profiles.udacity.com/u/aagamshah">Aagam Shah </a> </div>
        </div>
    </body>
</html>
