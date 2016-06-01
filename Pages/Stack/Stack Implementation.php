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
        <link rel="stylesheet" href="../../CSS/Stylesheet.css">
        <script src="../../JS/Script.js"></script>
        <title> Data Structure Visualization </title>
         <link rel="shortcut icon" href="favicon.ico" />
    </head>
<body>

<div class="container">
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
            <li><a href="Stack Implementation.php" id="b">Implementation</a></li>
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
<h1><strong>Stack >> Implementation</strong></h1> <br>
        <fieldset>
            <legend><strong>Implementation</strong></legend>
            <div>
                Consider now implementation of our abstract stack data structure. A natural implementation for a stack is a flexible array, that is, a vector.
                The following code contains a generic stack class definition that can be used to store any type of objects.
            </div>
            <p>This is the <code>Vector</code> implementation:</p>
            <pre><code>
                //********************* genStack.h *************************
                // generic class for vector implementation of stack
            
            #ifndef STACK
            #define STACK
            #include <span><span><</span>vector<span>></span></span>
            
            template< <span>class</span> T, int capacity = 30 >
            class Stack {
                    public:
                            Stack() {
                                pool.reserve(capacity);
                            }
                            void clear() {
                                pool.clear();
                            }
                            bool isEmpty() const {
                                 return pool.empty();
                            }
                            T& topEl() {
                                return pool.back();
                            }
                            T pop() {
                                T el = pool.back();
                                pool.pop_back();
                                return el;
                            }
                            void push(const T& el) {
                                pool.push_back(el);
                            }
                            
                    private:
                            vector<span><</span><span>T</span><span>></span> pool;
                       };
            #endif
            </code></pre>
            <div>
                Also, a linked list can be used for implementation of a stack.
            </div>
            <p>This is the <code>Linked List</code></code> implementation:</p>
            <pre><code>
                //********************** genListStack.h *************************
                // generic stack defined as a doubly linked list

            #ifndef LL_STACK
            #define LL_STACK
            #include <span><</span>list>
            
            template<span><</span>class T>
                    class LLStack {
                    public:
                    
                        LLStack() {
                        }
                        void clear() {
                            lst.clear();
                        }
                        bool isEmpty() const {
                            return lst.empty();
                        }
                        T& topEl() {
                            return lst.back();
                        }
                        T pop() {
                            T el = lst.back();
                            lst.pop_back();
                            return el;
                        }
                        void push(const T& el) {
                            lst.push_back(el);
                        }
                    private:
                        list<span><</span>T> lst;
                  };
            
             #endif
            </code></pre>
           </span>
        </code>
        </pre>
    <a href="Stack.php" class="left"> << Previous</a>
    <a href="Stack%20Visualization.php" class="right">Next >></a>
    </fieldset>
    
    </div>
    
        
      
     
</div>



</div>

</body>
</html>
