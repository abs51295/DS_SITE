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
        <title>Queue Implementation</title>
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
            <li><a href="Queue.php" class="mainhead">> Queue</a></li>
            <li><a href="Queue Implementation.php" id="b">Implementation</a></li>
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


        </div>
        <div class="content content1">
        <h1><strong>Queue >> Implementation</strong></h1>
        <fieldset>
            <legend><strong>Implementation</strong></legend>
            <p>
            One possible queue implementation is an array, although this may not be the best
            choice. Elements are added to the end of the queue, but they may be removed from its
            beginning, thereby releasing array cells. These cells should not be wasted. Therefore,
            they are utilized to enqueue new elements, whereby the end of the queue may occur
            at the beginning of the array. This situation is better pictured as a circular array, as
            Figure 4c illustrates. The queue is full if the first element immediately precedes the
            last element in the counterclockwise direction. However, because a circular array is
            implemented with a “normal” array, the queue is full if either the first element is in
            the first cell and the last element is in the last cell (Figure 4a) or if the first element is
            right after the last (Figure 4b). Similarly, enqueue( ) and dequeue( ) have to consider
            the possibility of wrapping around the array when adding or removing elements. For example, enqueue( ) can be viewed as operating on a circular array (Figure 4c), but in
            reality, it is operating on a one-dimensional array. Therefore, if the last element is in
            the last cell and if any cells are available at the beginning of the array, a new element
            is placed there (Figure 4d). If the last element is in any other position, then the new
            element is put after the last, space permitting (Figure 4e). These two situations must
            be distinguished when implementing a queue viewed as a circular array (Figure 4f).</p>
            <div>
                <figure>
                    <img class="displayed" src="../../Images/queue_implementation.jpg" alt="queue">
                    <figcaption>Figure 4 - (a–b) Two possible configurations in an array implementation of a queue when the
                    queue is full. (c) The same queue viewed as a circular array. (f) Enqueuing number
                    6 to a queue storing 2, 4, and 8. (d–e) The same queue seen as a one-dimensional
                    array with the last element (d) at the end of the array and (e) in the middle.</figcaption>
                </figure>
            </div>
            <br>
            <div>
                The following code contains possible implementations of member functions that operate on <code>Queues</code>. This is the <code>Arrays</code> implementation:
                <pre>
                     <code>
                         //******************** genArrayQueue.h **********************
                         // generic queue implemented as an array
                         
                      #ifndef ARRAY_QUEUE
                      #define ARRAY_QUEUE
                      
                         template<span><</span>class T, int size = 100>
                            class ArrayQueue {
                                public:
                                    ArrayQueue() {
                                        first = last = -1;
                                    }
                                    void enqueue(T);
                                    T dequeue();
                                    bool isFull() {
                                        return first == 0 && last == size-1 || first == last + 1;
                                    }
                                    bool isEmpty() {
                                        return first == -1;
                                    }
                                private:
                                    int first, last;
                                    T storage[size];
                            };
                            
                            template<span><</span>class T, int size>
                                void ArrayQueue<span><</span>T,size>::enqueue(T el) {
                                    if (!isFull())
                                        if (last == size-1 || last == -1) {
                                                 storage[0] = el;
                                                 last = 0;
                                                 if (first == -1)
                                                      first = 0;
                                        }
                                        else storage[++last] = el;
                                    else cout << "Full queue.\n";
                                }
                            
                            template<span><</span>class T, int size>
                                T ArrayQueue<span><</span>T,size>::dequeue() {
                                     T tmp;
                                     tmp = storage[first];
                                     if (first == last)
                                            last = first = -1;
                                    else if (first == size-1)
                                            first = 0;
                                    else first++;
                                    return tmp;
                                }
                      #endif
                     </code>
                </pre>
            </div>
            <div>
                A more natural <code>Queue</code> implementation is a <code>Doubly Linked List</code>:
                <pre>
                    <code>
                         //********************** genQueue.h *************************
                         // generic queue implemented with doubly linked list

                      #ifndef DLL_QUEUE
                      #define DLL_QUEUE
                      #include <span><</span>list>

                          template<span><</span>class T>
                            class Queue {
                                public:
                                    Queue() {
                                    }
                                    void clear() {
                                        lst.clear();
                                    }
                                    bool isEmpty() const {
                                        return lst.empty();
                                    }
                                    T& front() {
                                        return lst.front();
                                    }
                                    T dequeue() {
                                        T el = lst.front();
                                        lst.pop_front();
                                        return el;
                                    }
                                    void enqueue(const T& el) {
                                        lst.push_back(el);
                                    }
                                
                                private:
                                    list<span><</span>T> lst;
                            };
                      
                      #endif
                    </code>
                </pre>
                <br>
               
            </div>
            <a href="Queue.php" class="left"> << Previous</a>
            <a href="Queue%20Visualization.php" class="right">Next >></a>
        </fieldset>
        
        
        </div>
    </body>
</html>
