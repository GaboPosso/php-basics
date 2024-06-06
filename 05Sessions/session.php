<?php
session_start();
// Validate session keeps track of one of the variables created in control.php, when this one matches
// with the initial value it redirect the user to the the file exit.php file
if(!$_SESSION["authenticated"]) {
  header("Location: exit.php");
} 
?>