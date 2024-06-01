<?php
  foreach($_FILES["file_fls"] as $key => $value) {
    echo "Property: $key --- Value: $value<br/>";
  }

  $file = $_FILES["file_fls"]["tmp_name"];
  $location = "files/".$_FILES["file_fls"]["name"];

  

  if($_FILES["file_fls"]["type"] == "text/plain") {
    move_uploaded_file($file, $location);
    echo "Uploaded successfully";
  } else {
    echo "Only plain text files are allowed <br/> <a href=\"send_file.php\">Return</a>";
  }
 


?>