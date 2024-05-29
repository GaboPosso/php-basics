<?php
  if(isset($_GET["send-btn"])){
    echo "Data was sent using GET method, the data is: <br/> <br/> The name is: ".$_GET["name_txt"]."<br/>The password is: ".$_GET["pwd_txt"];
  } else if(isset($_POST["send-btn"])) {
    echo "Data was sent using POST method, the data is: <br/> <br/> The name is: ".$_POST["name_txt"]."<br/>The password is: ".$_POST["pwd_txt"];
  }
?>
