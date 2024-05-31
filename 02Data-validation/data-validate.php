<?php
  $name = "Gabriel";
  $password = "Posso";

  if(isset($_GET["send_hdn"])) {
    if($name == $_GET["name_txt"] && $password == $_GET["pwd_txt"]){
      echo "The name that you enter by GET is ".$_GET["name_txt"].
      ". <br/> The password that you entered by GET is ".$_GET["pwd_txt"].
      ".<br/>The gender you chose is ".$_GET["gender_rdo"].".";
    } else {
      header("Location: form.php?error=yes");
    }
  } else if(isset($_POST["send_hdn"])){
    if($name == $_POST["name_txt"] && $password == $_POST["pwd_txt"]){
      echo "The name that you enter by POST is ".$_POST["name_txt"].
      ". <br/> The password that you entered by POST is ".$_POST["pwd_txt"].
      ".<br/>The gender you chose is ".$_POST["gender_rdo"].".";
    } else {
      header("Location: form.php?error=yes");
    }
  }
?>