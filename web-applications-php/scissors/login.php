<?php
if (isset($_POST['cancel'])) {
  header('Location: index.php');
  return;
}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

$failure = false;

if (isset($_POST['who']) && isset($_POST['pass'])) {
  if (empty($_POST['who']) || empty($_POST['pass'])) {
    $failure = "User name and password are required";
  } else {
    $check = hash('md5', $salt . $_POST['pass']);
    if ($check == $stored_hash) {
      header('location: game.php?name=' . urlencode($_POST['who']));
      return;
    } else {
      $failure = "Incorrect password";
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gabriel Mejia Posso - Broken Rock Paper Scissors</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="starter-template.css" rel="stylesheet">

</head>

<body>

</body>
<div class="container">
  <h1>Please Log In</h1>

  <?php
  if ($failure != false) {
    echo ("<p style='color: red;'>" . htmlentities($failure) . "</p>\n");
  }
  ?>
  <form action="index.php" method="post">
    <label for="nam">User Name</label>
    <input type="text" name="who" id="nam" size="40" />
    <label for="id_1723">Password</label>
    <input type="text" name="pass" id="id_1723"><br />
    <input type="submit" value="Log In">
    <input type="submit" name="cancel" value="Cancel" </form>
    <p>
      For a password hint, view source and find a password hint
      in the HTML comments.
      <!-- Hint: The password is PHP (all lower case) followed by 123. -->
</div>

</html>