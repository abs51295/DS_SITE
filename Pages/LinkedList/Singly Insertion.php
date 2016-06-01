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
        <title>Insertion</title>
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
            <li><a href="Singly Insertion.php" id="b">Insertion</a></li>
            <li><a href="Singly Deletion.php">Deletion</a></li>
            <li><a href="Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        
        <div class="content content1">
        <h1><strong>Singly Linked List >> Insertion</strong></h1>
        <fieldset>
            <legend><strong>Insertion</strong></legend>
            <div>
                <ul>
                    <li><i><u>Adding a node at the beginning of the List: </u></i></li>
                </ul>
                Adding a node at the beginning of a linked list is performed in four steps:
                <ol>
                    <li>
                        An empty node is created. It is empty in the sense that the program performing insertion
                        does not assign any values to the data members of the node (Figure 7a).
                    </li>
                    <li>The node’s <code>info</code> member is initialized to a particular integer (Figure 7b).</li>
                    <li>Because the node is being included at the front of the list, the next member becomes
                    a pointer to the first node on the list; that is, the current value of head (Figure 7c).</li>
                    <li>The new node precedes all the nodes on the list, but this fact has to be reflected in
                    the value of head; otherwise, the new node is not accessible. Therefore, head is updated
                    to become the pointer to the new node (Figure 7d).</li>
                </ol>
                <figure>
                    <img class="displayed" src="../../Images/singly_insertion.jpg" alt="stack">
                    <figcaption>Figure 7 - Inserting a new node at the beginning of a singly linked list.</figcaption>
                </figure>
                <p>
                    The four steps are executed by the member function <code>addToHead()</code>.
                    The function executes the first three steps indirectly by calling the constructor
                    <code>IntSLLNode(el,head)</code>. The last step is executed directly in the function by assigning
                    the address of the newly created node to <code>head</code>.
                </p>
                <br>
                <ul>
                    <li><i><u>Adding a node at the end of the List: </u></i></li>
                </ul>
                The process of adding a new node to the end of the list has five steps: 
                <ol>
                    <li>An empty node is created (Figure 8a).</li>
                    <li>The node’s <code>info</code> member is initialized to an integer <code>el</code> (Figure 8b).</li>
                    <li>Because the node is being included at the end of the list, the <code>next</code> member is set to
                    null (Figure 8c).</li>
                    <li>The node is now included in the list by making the <code>next</code> member of the last node of
                    the list a pointer to the newly created node (Figure 8d).</li>
                    <li>The new node follows all the nodes of the list, but this fact has to be reflected in the
                    value of <code>tail</code>, which now becomes the pointer to the new node (Figure 8e).</li>
                </ol>
                <figure>
                    <img class="displayed" src="../../Images/singly_insertion_end.jpg" alt="stack">
                    <figcaption>Figure 8 - Inserting a new node at the end of a singly linked list.</figcaption>
                </figure>
                
                All these steps are executed in the if clause of <code>addToTail()</code> . The
                <code>else</code> clause of this function is executed only if the linked list is empty. If this case
                were not included, the program may crash because in the <code>if</code> clause we make an assignment
                to the <code>next</code> member of the node referred by <code>tail</code>. In the case of an empty
                linked list, it is a pointer to a nonexisting data member of a nonexisting node. <br>
                 <br>
                 <ul>
                    <li><strong>Time Complexity: </strong>The process of inserting a new node at the beginning of the list is very similar to
                    the process of inserting a node at the end of the list. This is because the implementation
                    of <code>IntSLList</code> uses two pointer members: <code>head</code> and <code>tail</code>. For this reason,
                    both <code>addToHead()</code> and <code>addToTail()</code> can be executed in constant time <code>O(1)</code>; that
                    is, regardless of the number of nodes in the list, the number of operations performed
                    by these two member functions does not exceed some constant number <code>c</code>.
                    </li>
                </ul>
            </div>
             <a href="Singly%20Linked%20Lists.php" class="left"> << Previous</a>
            <a href="Singly%20Deletion.php" class="right">Next >></a>
        </fieldset>
            </div>
        </div>
        
    </body>
</html>
