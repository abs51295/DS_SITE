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
        <title>Linked Lists</title>
        <link rel="stylesheet" href="../../CSS/visualPages.css" type="text/css">
        <link href="../../CSS/StyleSheet.css" rel="stylesheet" type="text/css">
        <script src="../../JS/Script.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="../index1.php">Home</a></li>
            <li><a href="../Home.php" id="a">Algorithms</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../my.php"><?php echo "$a";?></a></li>
        </ul>
    </div>
            <div class="menu nav1">
        <ul>
            <div class="same">
            <li><a href="../Stack/Stack.php" class="mainhead">> Stack</a></li>
            <li><a href="../Stack/Stack Implementation.php">Implementation</a></li>
            <li><a href="../Stack/Stack Visualization.php">Visualization (Static)</a></li>
            <li><a href="../Stack/dstack.php">Visualization (Dynamic)</a></li>
            </div>
            <div class="same">
            <li><a href="../Queue/Queue.php" class="mainhead">> Queue</a></li>
            <li><a href="../Queue/Queue Implementation.php">Implementation</a></li>
            <li><a href="../Queue/Queue Visualization.php">Visualization (Static)</a></li>
            <li><a href="../Queue/dqueue.php">Visualization (Dynamic)</a></li>
            </div>
            <div class="same">
            <li><a href="Linked List.php" id="b" class="mainhead">> Linked List</a></li>
            <li><a href="Singly%20Linked%20Lists%20Implementation.php">Implementation</a></li>
            <li><a href="Singly%20Linked%20Lists.php">Visualization</a></li>
            <li><a href="Singly Insertion.php">Insertion</a></li>
            <li><a href="Singly Deletion.php">Deletion</a></li>
            <li><a href="Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        
        <div class="content content1">
        <h1><strong>Linked List</strong></h1>
        <fieldset>
            <legend><strong>Introduction</strong></legend>
            <p>
                An array is a very useful data structure provided in programming languages.
                However, it has at least two limitations: (1) its size has to be known at
                compilation time and (2) the data in the array are separated in computer
                memory by the same distance, which means that inserting an item inside the array
                requires shifting other data in this array. This limitation can be overcome by using
                linked structures. A linked structure is a collection of nodes storing data and links to
                other nodes. In this way, nodes can be located anywhere in memory, and passing from
                one node of the linked structure to another is accomplished by storing the addresses
                of other nodes in the linked structure. Although linked structures can be implemented
                in a variety of ways, the most flexible implementation is by using pointers.
            </p>
            <div>
                There are various kinds of Linked Lists:
                <ul>
                    <li><a href="Singly Linked Lists.php">Singly Linked Lists</a></li>
                    <li>Doubly Linked Lists (to be added)</li>
                    <li>Circular Lists (to be added)</li>
                    <li>Skip Lists (to be added)</li>
                    <li>Self Organizing Lists (to be added)</li>
                </ul>
            </div>
            <a href="../Queue/dqueue.php" class="left"> << Previous</a>
            <a href="Singly%20Linked%20Lists%20Implementation.php" class="right">Next >></a>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </fieldset>
        
        
            </div>
           
            </div>
    </body>
</html>
