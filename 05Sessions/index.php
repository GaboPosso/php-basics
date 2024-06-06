<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessions</title>
  <style>
    form {
      margin: 0 auto;
      text-align: center;
      width: 400px;
    }

    span {
      color: #F00;
      font-size: 2em;
    }
  </style>
</head>

<body>
  <form name="authentication_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
   <?php
   error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
   if($_GET["error"] == "yes"){
    echo "<span>Please validate your info</span>";
   } else {
    echo "Enter your information";
   }
   ?>
  <br><br>
    User: <input type="text" name="user_txt" id=""> <br><br>
    Password: <input type="password" name="password_txt" id=""> <br><br>
    <input type="submit" name="enter_btn" value="Enter">
  </form>
</body>

</html>