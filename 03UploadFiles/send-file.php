<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Files to Server with PHP</title>
</head>

<body>
  <form name="send_file_frm" method="post" action="upload-file.php" enctype="multipart/form-data">
    <input type="file" name="file_fls" >
    <input type="submit" name="upload_btn" value="Upload File">
  </form>
</body>

</html>