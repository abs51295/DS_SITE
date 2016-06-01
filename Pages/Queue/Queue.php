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
        <title>Queue</title>
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
            <li><a href="Queue.php" id="b" class="mainhead">> Queue</a></li>
            <li><a href="Queue Implementation.php">Implementation</a></li>
            <li><a href="Queue Visualization.php">Visualization (Static)</a></li>
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
        <h1><strong>Queue</strong></h1>
        <fieldset>
           <legend><strong>Description</strong></legend>
            <p>
                A queue is simply a waiting line that grows by adding elements to its end and shrinks
                by taking elements from its front. Unlike a stack, a queue is a structure in which both
                ends are used: one for adding new elements and one for removing them. Therefore,
                the last element has to wait until all elements preceding it on the queue are removed.
                A queue is an FIFO structure: first in/first out.
            </p>
            <div>
                Queue operations are similar to stack operations. The following operations are
                needed to properly manage a queue:
                <ul>
                    <li><i>clear( )</i> — Clear the queue.</li>
                    <li><i>isEmpty( )</i> — Check to see if the queue is empty.</li>
                    <li><i>enqueue( el )</i> — Put the element el at the end of the queue.</li>
                    <li><i>dequeue( )</i> — Take the first element from the queue.</li>
                    <li><i>firstEl( )</i> — Return the first element in the queue without removing it.</li>
                </ul>
            </div>
            <div>
                A series of enqueue and dequeue operations is shown in Figure 3. This time—
                unlike for stacks—the changes have to be monitored both at the beginning of the
                queue and at the end. The elements are enqueued on one end and dequeued from the
                other. For example, after enqueuing 10 and then 5, the dequeue operation removes
                10 from the queue (Figure 3).
                <figure>
                    <img class="displayed" src="../../Images/queue.jpg" alt="kai nai" />
                    <figcaption>Figure 3 - A series of operations on queue</figcaption>
                </figure>  
                <p>Queues are frequently used in simulations to the extent that a well-developed
                and mathematically sophisticated theory of queues exists, called queuing theory, in
                which various scenarios are analyzed and models are built that use queues. In queuing
                processes there are a number of customers coming to servers to receive service.
                The throughput of the server may be limited. Therefore, customers have to wait in
                queues before they are served, and they spend some amount of time while they are
                being served. By customers, we mean not only people, but also objects. For example,
                parts on an assembly line in the process of being assembled into a machine, trucks
                waiting for service at a weighing station on an interstate, or barges waiting for a sluice
                to be opened so they can pass through a channel also wait in queues. The most familiar
                examples are lines in stores, post offices, or banks. The types of problems posed in
                simulations are: How many servers are needed to avoid long queues? How large must
                the waiting space be to put the entire queue in it? Is it cheaper to increase this space
                or to open one more server? <br> <br>
               </p>
            </div>
             <a href="../Stack/dstack.php" class="left"> << Previous</a>
            <a href="Queue%20Implementation.php" class="right">Next >></a>
        </fieldset>
        
        
        </div>
    
        </div>
    </body>
</html>
