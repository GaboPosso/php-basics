<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail function PHP</title>
  <style>
    form {
      margin: 1em auto;
      text-align: center;
    }

    span {
      color: #F60;
      font-size: 1.5em;
    }
  </style>
</head>
<body>
  <form name="mail_frm" action="send-mail.php" method="post" enctype="application/x-www-form-urlencoded">
    From: <input type="text" name="from_txt"> <br><br>
    For: <input type="text" name="for_txt"> <br><br>
    Subject: <input type="text" name="subject_txt"> <br><br>
    Message: <br> <textarea name="message_txa"></textarea> <br><br>
    <input type="button" name="send_btn" value="Send"> <br><br>
    <?php 
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if(isset($_GET["response"])) {

    }
    ?>
  </form>

</body>
</html>