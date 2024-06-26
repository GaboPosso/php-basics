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
      if (!isset($_GET['guess'])) {
        echo("Missing guess parameter");
      } else if (strlen($_GET['guess']) < 1) {
        echo("Your guess is too short");
      } else if ($_GET['guess'] > 100) {
        echo("Your guess is too high");
      } else if ($_GET['guess'] < 100) {
        echo("Your guess is too low");
      } else {
        echo("Congratulations! You guessed the number!");
      }
   ?>
  </p>
</body>
</html>