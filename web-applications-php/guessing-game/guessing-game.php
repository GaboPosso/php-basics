<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guessing game by Gabriel Posso</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>
  <p>
    <?php
     $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
      $message = false;  


      if (!isset($_POST['guess'])) {
        echo("Missing guess parameter");
      } else if (strlen($_POST['guess']) < 1) {
        echo("Your guess is too short");
      } else if ($_POST['guess'] > 100) {
        echo("Your guess is too high");
      } else if ($_POST['guess'] < 100) {
        echo("Your guess is too low");
      } else {
        echo("Congratulations! You guessed the number!");
      }

      if ($message !== false) {
        echo("<p>$message</p>\n");
      }

      
   ?>

   <form method="post">
    <p><label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess)?>">
    <input type="submit">
    </p>
   </form>
  </p>
</body>
</html>