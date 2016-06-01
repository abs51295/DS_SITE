<?php

session_start();
if (!isset($_SESSION["name"])) {
    header("Location:../index.html");
}

$a = $_SESSION['name'];
?>
<html>
<head>
    <link rel="stylesheet" href="../CSS/visualPages.css">
    <link rel="stylesheet" href="../CSS/Stylesheet.css">
    <title> Data Structure Visualization </title>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Data Structures</h1>
        <ul class="nav">
            <li><a href="index1.php" id="a">Home</a></li>
            <li><a href="Stack/Stack.php">Algorithms</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="my.php"><?php echo "$a"; ?></a></li>
        </ul>
    </div>
    <div class="header1">
        <p>Unlock Value of Data Structures</p>
        <h3>Learn fundamental data structures methods in ten straightforward weeks.</h3>
    </div>
    <div class="menu nav">
        <ul>
            <li><a href="#specification">> About this specialization</a></li>
            <li><a href="#courses">> Courses</a></li>
            <li><a href="#pricing">> Pricing</a></li>
            <li><a href="faq.php">> FAQs</a></li>
        </ul>
    </div>


    <div class="content content1">
        <div class="specification" id="specification">
            <p class="heading">About this specification</p>

            <p>This course will teach you the essential elements of Data Structures, covering Array, Stack, Queue,
                Linked List, Tree and Graph. No previous experience of these data structures is necessary, although it
                is helpful if you have some prior programming experience. First, Introduction and Scope of Data
                Structures are explored. Then we move on to consider the essential Data Structures, including Arrays,
                Stacks, Queues , Linked Lists, Trees and Graphs.You will learn how these data structures are implemented
                in different programming languages and will practice implementing them in our programming assignments.
                This will help you to understand what is going on inside a particular built-in implementation of a data
                structure and what to expect from it. You will also learn typical use cases for these data structures.
                Then we explore more advanced elements of JavaScript control, including advanced use of functions, event
                control, array processing, and DOM manipulation. </p>

            <p>After completing this course, you will be able to:
            <ol>
                <li>Visualize Data Structures</li>
                <li>Be able to apply Data Structures in programming</li>
                <li>Be able to understand applications of Data Structures</li>
            </ol>
            </p>
        </div>

        <div class="week" id="courses">
            <p class="heading">Week 1</p>

            <p class="intro">Introduction to Data Structure</p>

            <p>In this week we will answer the following questions:</p>

            <ol>
                <li>What is a Data Structure?</li>
                <li>How Data structures are used to store data?</li>
                <li>How is Data Structure stored in memory?</li>
            </ol>
        </div>

        <div class="week">
            <p class="heading">Week 2</p>

            <p class="intro">Array</p>

            <p>In this week you will learn about arrays. You will learn about the various implementations of array and
                how arrays are stored in memory.
                Also you will learn about various scenarios where array can be used. You will also make a program that
                uses array.</p>
        </div>

        <div class="week">
            <p class="heading">Week 3</p>

            <p class="intro">Stack</p>

            <p>In this week you will learn about Stacks. Have you seen plates in cafeteria? That's how stack stores
                data.
                You will learn about LIFO property of stack. You will also make a program that uses Stacks.</p>
        </div>

        <div class="week">
            <p class="heading">Week 4</p>

            <p class="intro">Queue</p>

            <p>In this week you will learn about Queues. You will study the FIFO property of queues. You will learn
                about different implementations of queue.
                You will also make a program that uses Queues.</p>
        </div>

        <div class="week">
            <p class="heading">Week 5</p>

            <p class="intro">Linked List</p>

            <p>In this week you will learn about Linked Lists. You will study the underlying implementation of Linked
                List. You will study different kinds of linked lists.
                You will also write a program that uses Linked Lists.</p>
        </div>

        <div class="week">
            <p class="heading">Week 6</p>

            <p class="intro">Unit test-1</p>

            <p>This is an assignment test that checks your knowledge based on the content taught in previous weeks.</p>
        </div>

        <div class="week">
            <p class="heading">Week 7</p>

            <p class="intro">Tree</p>

            <p>In this week you will learn about Trees. You will learn about various kinds of trees and their
                applications. You will also learn about memory representation
                of trees.You will also write a program that uses Trees.</p>
        </div>

        <div class="week">
            <p class="heading">Week 8</p>

            <p class="intro">Graph-1</p>

            <p>In this week we will teach you the basics of Graphs. You will learn about various implementations of
                graphs. You will also write a simple program that uses graphs.</p>
        </div>

        <div class="week">
            <p class="heading">Week 9</p>

            <p class="intro">Graph-2</p>

            <p>In this week we will teach you about various advanced algorithms of graphs like DFS and BFS. You will
                also learn about Topological sort and its applications.You will write a program that simulates game theory.</p>
        </div>

        <div class="week">
            <p class="heading">Week 10</p>

            <p class="intro">Introduction to Advanced Data Structures</p>

            <p>In this week we will give you a brief introduction to various advanced data structures like Disjoint Sets, Segment Trees, Suffix Array etc.</p>
        </div>

    </div>

</div>

</body>
</html>
