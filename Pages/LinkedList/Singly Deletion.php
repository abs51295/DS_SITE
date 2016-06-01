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
        <title>Deletion</title>
        <link rel="stylesheet" href="../../CSS/visualPages.css">
        <link href="../../CSS/StyleSheet.css" rel="stylesheet" type="text/css">
        <script src="../../JS/Script.js"></script>
        <style>
                td.upper_line { border-top:solid 1px black; }
                table.fraction { text-align: center; vertical-align: middle;
                margin-top:0.5em; margin-bottom:0.5em; line-height: 2em; padding: 0px; border-spacing: 2px; border-collapse: separate;}
        </style>
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
            <li><a href="Singly Deletion.php" id="b">Deletion</a></li>
            <li><a href="Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        <div class="content content1">
        <h1><strong>Singly Linked Lists >> Deletion</strong></h1>
        <fieldset>
            <legend><strong>Deletion</strong></legend>
            <div>
                <ul>
                    <li><i><u>Deleting a node from the beginning of the List: </u></i></li>
                </ul>
                One deletion operation consists of deleting a node at the beginning of the list and
                returning the value stored in it. This operation is implemented by the member function
                <code>deleteFromHead()</code>. In this operation, the information from the first node is
                temporarily stored in a local variable <code>el</code>, and then <code>head</code> is reset so that what was the
                second node becomes the first node. In this way, the former first node can be deleted
                in constant time <code>O(1)</code> (Figure 9).
                 <figure>
                    <img class="displayed" src="../../Images/singly_deletion_begin.jpg" alt="stack">
                    <figcaption>Figure 9 - Deleting a node at the beginning of a singly linked list.</figcaption>
                </figure>
                Unlike Insertion, there are now two special cases to consider. One case is when we
                attempt to remove a node from an empty linked list. If such an attempt is made, the
                program is very likely to crash, which we don’t want to happen. The caller should also
                know that such an attempt is made to perform a certain action. After all, if the caller
                expects a number to be returned from the call to <code>deleteFromHead()</code> and no number
                can be returned, then the caller may be unable to accomplish some other operations.
                The member function assumes that the list is not empty. To prevent the program from crashing,
                the member function <code>isEmpty()</code> is added to the <code>IntSLList class</code>, and the user should use it as in:
                <pre>
                    <code>
                        if (!list.isEmpty())
                                n = list.deleteFromHead();
                        else <i>do not delete;</i>
                    </code>
                </pre>
                The second special case is when the list has only one node to be removed. In this
                case, the list becomes empty, which requires setting <code>tail</code> and <code>head</code> to null.
            </div>
            <br>
            <div>
                <ul>
                    <li><i><u>Deleting a node from the end of the List: </u></i></li>
                </ul>
                The second deletion operation consists of deleting a node from the end of the list,
                and it is implemented as the member function <code>deleteFromTail()</code>. The problem is
                that after removing a node, <code>tail</code> should refer to the new tail of the list; that is, <code>tail</code> has
                to be moved backward by one node. But moving backward is impossible because there
                is no direct link from the last node to its predecessor. Hence, this predecessor has to be
                found by searching from the beginning of the list and stopping right before <code>tail</code>. This is
                accomplished with a temporary variable <code>tmp</code> that scans the list within the <code>for</code> loop. The
                variable <code>tmp</code> is initialized to the head of the list, and then in each iteration of the loop it is
                advanced to the next node. If the list is as in Figure 10a, then <code>tmp</code> first refers to the head
                node holding number 6; after executing the assignment <code>tmp = tmp->next</code>, <code>tmp</code> refers
                to the second node (Figure 10b). After the second iteration and executing the same assignment,
                <code>tmp</code> refers to the third node (Figure 10c). Because this node is also the next
                to last node, the loop is exited, after which the last node is deleted (Figure 10d). Because
                <code>tail</code> is now pointing to a nonexisting node, it is immediately set to point to the next to
                last node currently pointed to by <code>tmp</code> (Figure 10e). To mark the fact that it is the last
                node of the list, the <code>next</code> member of this node is set to null (Figure 10f).
                 <figure>
                    <img class="displayed" src="../../Images/singly_deletion_end.jpg" alt="stack">
                    <figcaption>Figure 10 - Deleting a node from the end of a singly linked list.</figcaption>
                </figure>
                In removing the last node, the two special cases are the same as in <code>deleteFromHead()</code>.
                If the list is empty, then nothing can be removed, but what
                should be done in this case is decided in the user program just as in the case of
                <code>deleteFromHead()</code>. The second case is when a single-node list becomes empty
                after removing its only node, which also requires setting <code>head</code> and <code>tail</code> to null.
                <p>
                    The most time-consuming part of <code>deleteFromTail()</code> is finding the next to
                    last node performed by the for loop. It is clear that the loop performs <code>n – 1</code> iterations
                    in a list of <code>n</code> nodes, which is the main reason this member function takes <code>O(n)</code> time to
                    delete the last node.
                </p>
            </div>
            <br>
            <div>
                <ul>
                    <li><i><u>Deleting a node from the List: </u></i></li>
                </ul>
                The two discussed deletion operations remove a node from the head or from the
                tail (that is, always from the same position) and return the integer that happens to be
                in the node being removed. A different approach is when we want to delete a node
                that holds a particular integer regardless of the position of this node in the list. It may 
                be right at the beginning, at the end, or anywhere inside the list. Briefly, a node has
                to be located first and then detached from the list by linking the predecessor of this
                node directly to its successor. Because we do not know where the node may be, the
                process of finding and deleting a node with a certain integer is much more complex
                than the deletion operations discussed so far. The member function <code>deleteNode()</code>
                in our implementation code is an implementation of this process.
                <p>
                    A node is removed from inside a list by linking its predecessor to its successor.
                    But because the list has only forward links, the predecessor of a node is not reachable
                    from the node. One way to accomplish the task is to find the node to be removed by
                    first scanning the list and then scanning it again to find its predecessor. Another way
                    is presented in <code>deleteNode()</code>, as shown in Figure 11. Assume that we want to delete
                    a node that holds number 8. The function uses two pointer variables, <code>pred</code> and <code>tmp</code>,
                    which are initialized in the <code>for</code> loop so that they point to the first and second nodes
                    of the list, respectively (Figure 11a). Because the node <code>tmp</code> has the number 5, the first
                    iteration is executed in which both <code>pred</code> and <code>tmp</code> are advanced to the next nodes (Figure
                    11b). Because the condition of the <code>for</code> loop is now true (<code>tmp</code> points to the node
                    with 8), the loop is exited and an assignment <code>pred->next = tmp->next</code> is executed
                    (Figure 11c). This assignment effectively excludes the node with 8 from the list. The
                    node is still accessible from variable <code>tmp</code>, and this access is used to return space occupied
                    by this node to the pool of free memory cells by executing <code>delete</code> (Figure 11d).
                </p>
                <figure>
                    <img class="displayed" src="../../Images/singly_deletion.jpg" alt="stack">
                    <figcaption>Figure 11 - Deleting a node from a singly linked list.</figcaption>
                </figure>
                <p>
                    It is clear that the best case for <code>deleteNode()</code> is when the head node is to be
                    deleted, which takes <code>O(1)</code> time to accomplish. The worst case is when the last node
                    needs to be deleted, which reduces <code>deleteNode()</code> to <code>deleteFromTail()</code> and to
                    its <code>O(n)</code> performance. What is the average case? It depends on how many iterations
                    the <code>for</code> loop executes. Assuming that any node on the list has an equal chance to be
                    deleted, the loop performs no iteration if it is the first node, one iteration if it is the
                    second node, . . . , and finally <code>n – 1</code> iterations if it is the last node. For a long sequence
                    of deletions, one deletion requires on the average: 
                </p>
                <table class="fraction" align="center">
                <tr>
                    <td>
                            0 + 1 + ..... + (n - 1)
                    </td>
                    <td rowspan="2">
                        =
                    </td>
                    <td>
                        n - 1
                    </td>
                <tr>
                    <td class="upper_line">
                        n
                    </td>
                    <td class="upper_line">
                        2
                    </td>
                </tr>
                </table>
                That is, on the average, <code>deleteNode()</code> executes <code>O(n)</code> steps to finish, just like in the
                worst case.
            </div>
             <a href="Singly%20Insertion.php" class="left"> << Previous</a>
            <a href="Singly%20Search.php" class="right">Next >></a>
        </fieldset>
      
        
        </div>
         
        </div>
    </body>
</html>
