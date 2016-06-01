<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../../index.html");
}

$a = $_SESSION['name']; 
 ?>

<html>
<head>
<link rel="stylesheet" href="../../CSS/visualPages.css">
<link rel="stylesheet" href="../../CSS/Stylesheet.css" type="text/css">
<title> Data Structure Visualization </title>
<link rel="shortcut icon" href="favicon.ico" />
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
            <li><a href="Stack Implementation.php"x>Implementation</a></li>
            <li><a href="Stack Visualization.php" id="b">Visualization (Static)</a></li>
            <li><a href="dstack.php">Visualization (Dynamic)</a></li>
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
<h1><strong>Stack >> Static Visualization</strong></h1> <br>
        <fieldset>
            <legend><strong>Visualization</strong></legend>
            <div>
                Figure 2 shows the same sequence of push and pop operations as Figure 1
                with the changes that take place in the stack implemented as a vector (Figure 2b)
                and as a linked list (Figure 2c).
                <figure>
                    <img class="displayed" src="../../Images/stack_visualization.jpg" alt="stack">
                    <figcaption>Figure 2 - A series of operations executed on (a) an abstract stack and the stack implemented (b) with a vector and (c) with a linked list.</figcaption>
                </figure>
                <ul>
                    <li><strong>Time Complexity: </strong>It is easy to see that in the vector and linked list implementations, popping and
                    pushing are executed in constant time O(1). However, in the vector implementation,
                    pushing an element onto a full stack requires allocating more memory and copies the     
                    elements from the existing vector to a new vector. Therefore, in the worst case, pushing
                    takes O(n) time to finish.</li>
                </ul>
            </div>
            <a href="Stack%20Implementation.php" class="left"> << Previous</a>
            <a href="dstack.php" class="right">Next >></a>
        </fieldset>
        <br>
    
        
</div>


</div>

</body>
</html>
