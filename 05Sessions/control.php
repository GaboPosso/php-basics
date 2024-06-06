<?php
 if($_POST["user_txt"] == "gabriel" && $_POST["password_txt"] == "12345") {
  // Start session
  session_start();
  // Declare variables of my session
  $_SESSION["authenticated"] = true;
  $_SESSION["user"] = $_POST["user_txt"];
  
  header("Location: protected-file.php");
 } else {
  header("Location: index.php?error=yes");
 }
?>