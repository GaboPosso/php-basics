<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Delivery by GET and POST</title>
</head>
<body>
  <hgroup>
    <h1>Form sent by GET Method</h1></h1>
  </hgroup>
  <form name="send-get_frm" action="send-data.php" method="get" enctype="application/x-www-form-urlencoded">
    <label>Enter your name:</label>
    <input type="text" name="name_txt">
    <br><br>
    <label>Enter your password:</label>
    <input type="password" name="pwd_txt">
    <br><br>
    <input type="submit" name="send-btn" value="GET-send">
  </form>
  <hgroup>
    <h1>Form sent by POST Method</h1></h1>
  </hgroup>
  <form name="send-post_frm" action="send-data.php" method="post" enctype="application/x-www-form-urlencoded">
    <label>Enter your name:</label>
    <input type="text" name="name_txt">
    <br><br>
    <label>Enter your password:</label>
    <input type="password" name="pwd_txt">
    <br><br>
    <input type="submit" name="send-btn" value="POST-send">
  </form>
</body>
</html>