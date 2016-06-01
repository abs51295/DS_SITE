<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../../index.html");
}

$a = $_SESSION['name']; 
 ?>

<html>
<head>
<link rel="stylesheet" href="../../CSS/visualPages.css" type="text/css">
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
            <li><a href="Stack.php" id="b" class="mainhead">> Stack</a></li>
           <li><a href="Stack Implementation.php">Implementation</a></li>
            <li><a href="Stack Visualization.php">Visualization (Static)</a></li>
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
<h1><strong>Stack</strong></h1>
        <fieldset>
           <legend><strong>Description</strong></legend>
        <p>A stack is a linear data structure that can be accessed only at one of its ends for storing
            and retrieving data. Such a stack resembles a stack of trays in a cafeteria: new
            trays are put on the top of the stack and taken off the top. The last tray put on the
            stack is the first tray removed from the stack. For this reason, a stack is called an
            LIFO structure: last in/first out.</p>
        <div>
            A tray can be taken only if there is at least one tray on the stack, and a tray can
            be added to the stack only if there is enough room; that is, if the stack is not too high.
            Therefore, a stack is defined in terms of operations that change its status and operations
            that check this status. The operations are as follows:
            <ul>
                <li><i>clear( )</i> &ndash; Clear the stack.</li>
                <li><i>isEmpty( )</i> &ndash; Check to see if the stack is empty.</li>
                <li><i>push( el )</i> &ndash; Put the element el on the top of the stack.</li>
                <li><i>pop( )</i> &ndash; Take the topmost element from the stack.</li>
                <li><i>topEl( )</i> &ndash; Return the topmost element in the stack without removing it.</li>
            </ul>
        </div>
        <div>
            A series of push and pop operations is shown in Figure 1. After pushing number
            10 onto an empty stack, the stack contains only this number. After pushing 5 on
            the stack, the number is placed on top of 10 so that, when the popping operation is
            executed, 5 is removed from the stack, because it arrived after 10, and 10 is left on
            the stack. After pushing 15 and then 7, the topmost element is 7, and this number is
            removed when executing the popping operation, after which the stack contains 10 at
            the bottom and 15 above it. 
            <figure>
                <img class="displayed" src="../../Images/stack.jpg" alt="kai nai" />
                <figcaption>Figure 1 - A series of operations on stack</figcaption>
            </figure>   
            
        </div>
        <p>
            Generally, the stack is very useful in situations when data have to be stored and
            then retrieved in reverse order. One application of the stack is in matching delimiters
            in a program. This is an important example because delimiter matching is part of any
            compiler: No program is considered correct if the delimiters are mismatched. <br> <br>
           
        </p>
     <a href="Stack%20Implementation.php" class="right">Next >></a>    
    </fieldset>
        
   
        
</div>




</div>

</body>
</html>
