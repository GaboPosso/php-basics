<?php include("session.php")?>
Welcome:
<?php echo $_SESSION["user"];?>
You've been successfully logged in with PHP Safe sessions.
<br><br>
<a href="protected-file2.php">Go to another safe page</a>
<br><br>
<a href="exit.php">Exit</a>