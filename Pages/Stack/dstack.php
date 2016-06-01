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
        <title>Visualization</title>
        <link rel="stylesheet" href="../../CSS/visualPages.css">
        <link rel="stylesheet" href="../../CSS/Stylesheet.css">
        <script src="../../JS/Script2.js"></script>
        <script src="../../JS/Script.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="../index1.php">Home</a></li>
            <li><a href="Stack.php" id="a">Algorithms</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../my.php"><?php echo "$a";?></a></li>
        </ul>
    </div>
            <div class="menu nav1">
        <ul>
            <div class="same">
            <li><a href="Stack.php"  class="mainhead">> Stack</a></li>
            <li><a href="Stack Implementation.php">Implementation</a></li>
            <li><a href="Stack Visualization.php">Visualization (Static)</a></li>
            <li><a href="dstack.php" id="b">Visualization (Dynamic)</a></li>
            </div>
            <div class="same">
            <li><a href="../Queue/Queue.php" class="mainhead">> Queue</a></li>
            <li><a href="../Queue/Queue Implementation.php">Implementation</a></li>
            <li><a href="../Queue/Queue Visualization.php">Visualization (Static)</a></li>
            <li><a href="../Queue/dqueue.php">Visualization (Dynamic)</a></li>
            </div>
            <div class="same">
            <li><a href="../LinkedList/Linked List.php" class="mainhead">> Linked List</a></li>
            <li><a href="../LinkedList/Singly%20Linked%20Lists%20Implementation.php">Implementation</a></li>
            <li><a href="../LinkedList/Singly%20Linked%20Lists.php">Visualization</a></li>
            <li><a href="../LinkedList/Singly Insertion.php">Insertion</a></li>
            <li><a href="../LinkedList/Singly Deletion.php">Deletion</a></li>
            <li><a href="../LinkedList/Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        
        <div class="content content1">
            <h1><strong>Stack >> Dynamic Visualization</strong></h1>
            <fieldset>
            <legend><strong>Visualization</strong></legend>
            <input type="text" id="number"> <button id="push" onclick="push()">Push</button> 
            <button id="pop" onclick="pop()">Pop</button> <br> <br>
            Your Stack:  <br> <br>
            <div id="stack">
            </div>
             <a href="Stack%20Visualization.php" class="left"> << Previous</a>
            <a href="../Queue/Queue.php" class="right">Next >></a>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            </fieldset>
            </div>
        </div>
    </body>
</html>
