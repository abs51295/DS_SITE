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
        <title>Search</title>
        <link rel="stylesheet" href="../../CSS/visualPages.css">
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
            <li><a href="Linked List.php" class="mainhead">> Linked List</a></li>
            <li><a href="Singly%20Linked%20Lists%20Implementation.php">Implementation</a></li>
            <li><a href="Singly%20Linked%20Lists.php">Visualization</a></li>
            <li><a href="Singly Insertion.php" >Insertion</a></li>
            <li><a href="Singly Deletion.php" >Deletion</a></li>
            <li><a href="Singly Search.php" id="b">Search</a></li>
            </div>
        </ul>
    </div>
        
        <div class="content content1">
        <h1><strong>Singly Linked List >> Search</strong></h1>
        <fieldset>
            <legend><strong>Search</strong></legend>
            <div>
                <p>
                    The insertion and deletion operations modify linked lists. The searching operation
                    scans an existing list to learn whether a number is in it. We implement this operation
                    with the Boolean member function <code>isInList()</code>. The function uses a temporary
                    variable <code>tmp</code> to go through the list starting from the head node. The number
                    stored in each node is compared to the number being sought, and if the two numbers
                    are equal, the loop is exited; otherwise,<code>tmp</code>  is updated to <code>tmp->next</code> so that the
                    next node can be investigated. After reaching the last node and executing the assignment
                    <code>tmp = tmp->next</code>, <code>tmp</code> becomes null, which is used as an indication that the
                    number <code>el</code> is not in the list. That is, if <code>tmp</code> is not null, the search was discontinued  
                    somewhere inside the list because <code>el</code> was found. That is why <code>isInList()</code> returns
                    the result of comparison <code>tmp != 0:</code> if <code>tmp</code> is not null, <code>el</code> was found and <code>true</code> is
                    returned. If <code>tmp</code> is null, the search was unsuccessful and <code>false</code> is returned.
                </p>
                <p>
                    With reasoning similar to that used to determine the efficiency of <code>deleteNode()</code>,
                    <code>isInList()</code> takes <code>O(1)</code> time in the best case and <code>O(n)</code> in the worst and average cases.
                </p>
            </div>

            <a href="Singly%20Deletion.php" class="left"> << Previous</a>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </fieldset>
        
        </div>
      
        </div>
    </body>
</html>
