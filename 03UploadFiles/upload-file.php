<?php
  foreach($_FILES["file_fls"] as $key => $value) {
    echo "Property: $key --- Value: $value<br/>";
  }

  $file = $_FILES["file_fls]["tmp_name"];
  $location = "files/"._FILES["file_fls]["name"];

  move_uploaded_file($file, $location);
?>