<?php
    session_start();
	unset($_SESSION['name']);
    session_destroy();// empty value and old timestamp
    header("Location:../index.html");
?>