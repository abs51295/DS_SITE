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
        <title>Queue Visualization</title>
        <link rel="stylesheet" href="../../CSS/visualPages.css">
        <link href="../../CSS/StyleSheet.css" rel="stylesheet" type="text/css">
        <script src="Script.js"></script>
    </head>
    <body>
<div class="container">
<div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="../index1.php">Home</a></li>
            <li><a href="../Stack/Stack.php" id="a">Algorithms</a></li>
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
            <li><a href="Queue.php" class="mainhead">> Queue</a></li>
            <li><a href="Queue Implementation.php" >Implementation</a></li>
            <li><a href="Queue Visualization.php" id="b">Visualization (Static)</a></li>
            <li><a href="dqueue.php">Visualization (Dynamic)</a></li>
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
        <h1><strong>Queue >> Static Visualization</strong></h1>
        <fieldset>
            <legend><strong>Visualization</strong></legend>
            <div>
                Figure 5 shows the same sequence of enqueue and dequeue operations
                as Figure 3 , and indicates the changes in the queue implemented as an array
                (Figure 5b) and as a linked list (Figure 5c). The linked list keeps only the
                numbers that the logic of the queue operations indicated by Figure 5a requires.
                The array includes all the numbers until it fills up, after which new numbers are
                included starting from the beginning of the array.
                <figure>
                    <img class="displayed" src="../../Images/queue_visualization.jpg" alt="stack">
                    <figcaption>Figure 5 - A series of operations executed on (a) an abstract queue and the queue implemented (b) with an array and (c) with a linked list.</figcaption>
                </figure>
                <ul>
                    <li><strong>Time Complexity: </strong>In both suggested implementations enqueuing and dequeuing can be executed
                    in constant time O(1), provided a doubly linked list is used in the list implementation.
                    In the singly linked list implementation, dequeuing requires O(n) operations primarily to scan the list and stop at the next to last node.
                    </li>
                </ul>
            </div>
             <a href="Queue%20Implementation.php" class="left"> << Previous</a>
            <a href="dqueue.php" class="right">Next >></a>
        </fieldset>
        
        
        </div>
        
        </div>
    </body>
</html>
