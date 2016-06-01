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
            <li><a href="Singly%20Linked%20Lists%20Implementation.php" id="b">Implementation</a></li>
            <li><a href="Singly%20Linked%20Lists.php">Visualization</a></li>
            <li><a href="Singly Insertion.php">Insertion</a></li>
            <li><a href="Singly Deletion.php">Deletion</a></li>
            <li><a href="Singly Search.php">Search</a></li>
            </div>
        </ul>
    </div>

        
        <div class="content content1">
        <h1><strong>Singly Linked List >> Implementation</strong></h1>
        <fieldset>
            <legend><strong>Implementation</strong></legend>
            <div>
                The following header file contains class to implement Singly Linked Lists: 
                <pre>
                    <code>
                        //************************ intSLList.h **************************
                        // singly-linked list class to store integers
                      
                        #ifndef INT_LINKED_LIST
                        #define INT_LINKED_LIST
                        
                        class IntSLLNode {
                            public:
                                IntSLLNode() {
                                    next = 0;
                                }
                                
                                IntSLLNode(int el, IntSLLNode *ptr = 0) {
                                    info = el; next = ptr;
                                }
                                
                                int info;
                                IntSLLNode *next;
                        };

                        class IntSLList {
                            public:
                                IntSLList() {
                                    head = tail = 0;
                                }
                                
                                ~IntSLList();
                                
                                int isEmpty() {
                                    return head == 0;
                                }
                                
                                void addToHead(int);
                                void addToTail(int);
                                int deleteFromHead();  // delete the head and return its info
                                int deleteFromTail();  // delete the tail and return its info
                                void deleteNode(int);
                                bool isInList(int) const;
                        
                            private:
                                IntSLLNode *head, *tail;
                        };
                    
                        #endif
                    </code>
                </pre>
            </div>
            <div>
                The following code shows Implementation of Linked List:
                <pre>
                    <code>
                        //************************ intSLList.cpp **************************
                        
                        #include <span><</span>iostream.h>
                        #include "intSLList.h"

                        IntSLList::~IntSLList() {
                            for (IntSLLNode *p; !isEmpty(); ) {
                                p = head->next;
                                delete head;
                                head = p;
                             }
                        }
                        
                        void IntSLList::addToHead(int el) {
                            head = new IntSLLNode(el,head);
                                if (tail == 0)
                                tail = head;
                        }

                        void IntSLList::addToTail(int el) {
                                if (tail != 0) { // if list not empty;
                                    tail->next = new IntSLLNode(el);
                                    tail = tail->next;
                                }
                                else head = tail = new IntSLLNode(el);
                        }
                        
                        int IntSLList::deleteFromHead() {
                                int el = head->info;
                                IntSLLNode *tmp = head;
                                if (head == tail) // if only one node in the list;
                                    head = tail = 0;
                                else head = head->next;
                                delete tmp;
                                return el;
                        }

                        int IntSLList::deleteFromTail() {
                                int el = tail->info;
                                if (head == tail) { // if only one node in the list;
                                    delete head;
                                    head = tail = 0;
                                }
                                else { // if more than one node in the list,
                                    IntSLLNode *tmp; // find the predecessor of tail;
                                    for (tmp = head; tmp->next != tail; tmp = tmp->next);
                                    delete tail;
                                    tail = tmp; // the predecessor of tail becomes tail;
                                    tail->next = 0;
                                }
                                return el;
                        }

                        void IntSLList::deleteNode(int el) {
                                if (head != 0) // if nonempty list;
                                    if (head == tail && el == head->info) { // if only one
                                        delete head; // node in the list;
                                        head = tail = 0;
                                    }   
                                    else if (el == head->info) {// if more than one node in the list
                                        IntSLLNode *tmp = head;
                                        head = head->next;
                                        delete tmp; // and old head is deleted;
                                    }
                                    else { // if more than one node in the list
                                        IntSLLNode *pred, *tmp;
                                        for (pred = head, tmp = head->next; // and a nonhead node
                                        tmp != 0 && !(tmp->info == el);// is deleted;
                                        pred = pred->next, tmp = tmp->next);
                                        
                                        if (tmp != 0) {
                                            pred->next = tmp->next;
                                            if (tmp == tail)
                                                tail = pred;
                                            delete tmp;
                                        }
                                    }
                        }

                        bool IntSLList::isInList(int el) const {
                                IntSLLNode *tmp;
                                for (tmp = head; tmp != 0 && !(tmp->info == el); tmp = tmp->next);
                                return tmp != 0;
                        }
                    </code>
                </pre>
            </div>
            <p>
                The singly linked list implementation in the above code uses two classes: one class,
                <code>IntSLLNode</code>, for nodes of the list, and another, <code>IntSLList</code>, for access to the list.
                The class <code>IntSLList</code> defines two data members, head and tail, which are pointers
                to the first and the last nodes of a list. This explains why all members of <code>IntSLLNode</code>
                are declared public. Because particular nodes of the list are accessible through pointers,
                nodes are made inaccessible to outside objects by declaring head and tail private
                so that the information-hiding principle is not really compromised. If some of
                the members of <code>IntSLLNode</code> were declared nonpublic, then classes derived from
                <code>IntSLList</code> could not access them. <br> <br>
                The list is declared with the statement: <br>
                <pre>
                    <code>
                        IntSLList list;
                    </code>
                </pre>
            </p>
            <a href="Linked%20List.php" class="left"> << Previous</a>
            <a href="Singly%20Linked%20Lists.php" class="right">Next >></a>
        </fieldset>
       
       
        </div>
         
        </div>
    </body>
</html>
