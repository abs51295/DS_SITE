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
        <title>Singly Linked List</title>
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
            <li><a href="Singly%20Linked%20Lists.php" id="b">Visualization</a></li>
            <li><a href="Singly Insertion.php">Insertion</a></li>
            <li><a href="Singly Deletion.php">Deletion</a></li>
            <li><a href="Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        
        <div class="content content1">
        <h1><strong>Singly Linked List >> Visualization</strong></h1>
        <fieldset>
            <legend><strong>Description</strong></legend>
            <div>
                If a node contains a data member that is a pointer to another node, then many nodes
                can be strung together using only one variable to access the entire sequence of nodes.
                Such a sequence of nodes is the most frequently used implementation of a linked list,
                which is a data structure composed of nodes, each node holding some information
                and a pointer to another node in the list. If a node has a link only to its successor in
                this sequence, the list is called a singly linked list. An example of such a list is shown
                in Figure 6. Note that only one variable p is used to access any node in the list. The
                last node on the list can be recognized by the null pointer.
                <figure>
                    <img class="displayed" src="../../Images/Singly_Linked_lis.jpg" alt="stack">
                    <figcaption>Figure 6 - A singly linked list.</figcaption>
                </figure>
            </div>
            <div>
                Each node in the list in Figure 6 is an instance of the following class definition: <br>
                <pre>
                    <code>
                        class IntSLLNode {
                        public:
                            IntSLLNode() {
                                next = 0;
                            }
                            IntSLLNode(int i, IntSLLNode *in = 0) {
                                info = i; next = in;
                            }
                            
                            int info;
                            IntSLLNode *next;
                        };
                    </code>
                </pre>
            </div>
            <p>
                A node includes two data members: <code>info</code> and <code>next</code>. The <code>info</code> member is used
                to store information, and this member is important to the user. The <code>next</code> member is
                used to link nodes to form a linked list. It is an auxiliary data member used to maintain
                the linked list. It is indispensable for implementation of the linked list, but less
                important (if at all) from the user’s perspective. Note that <code>IntSLLNode</code> is defined
                in terms of itself because one data member, <code>next</code>, is a pointer to a node of the same
                type that is just being defined. Objects that include such a data member are called
                self-referential objects.
                <br> <br>
                The definition of a node also includes two constructors. The first constructor initializes
                the <code>next</code> pointer to null and leaves the value of <code>info</code> unspecified. The second
                constructor takes two arguments: one to initialize the <code>info</code> member and another to
                initialize the <code>next</code> member. The second constructor also covers the case when only
                one numerical argument is supplied by the user. In this case, <code>info</code> is initialized to the
                argument and next to null. <br> <br>
                Implementation of Singly Linked List can be found <a href="Singly Linked Lists Implementation.php" target="_blank">here</a>.
            </p>
            <a href="Singly%20Linked%20Lists%20Implementation.php" class="left"> << Previous</a>
            <a href="Singly%20Insertion.php" class="right">Next >></a>
        </fieldset>
            </div>
        </div>
    </body>
</html>
