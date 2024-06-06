<?php include("session.php")?>
Welcome:
<?php echo $_SESSION["user"];?>
You've been successfully logged in a different page with PHP Safe sessions.
<br><br>
<a href="protected-file.php">Go to first safe page</a>
<br><br>
<a href="exit.php">Exit</a>