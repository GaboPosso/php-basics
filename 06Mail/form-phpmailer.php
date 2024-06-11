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
  <form name="mail_frm" action="send-mail.php" method="post" enctype="multipart/form-data">
    From: <input type="text" name="from_txt"> <br><br>
    For: <input type="text" name="for_txt"> <br><br>
    Subject: <input type="text" name="subject_txt"> <br><br>
    Attachment: <input type="file" name="file_fls"> <br><br>
    Message: <br> <textarea name="message_txa"></textarea> <br><br>
    <input type="button" name="send_btn" value="Send"> <br><br>
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if (isset($_GET["response"])) {
      echo "<span>" . $_GET["response"] . "</span>";
    }
    ?>
  </form>
  <script>
    const formValidation = () => {
      let verify = true;
      let expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

      if (!document.mail_frm.from_txt.value) {
        alert("The From field is required!");
        document.mail_frm.from_txt.focus();
        verify = false;
      } else if (!expRegEmail.exec(document.mail_frm.from_txt.value)) {
        alert("The From field is not valid!");
        document.mail_frm.from_txt.focus();
        verify = false;
      } else if (!document.mail_frm.for_txt.value) {
        alert("The For field is required!");
        document.mail_frm.for_txt.focus();
        verify = false;
      } else if (!expRegEmail.exec(document.mail_frm.for_txt.value)) {
        alert("The For field is not valid!");
        document.mail_frm.for_txt - value.focus();
        verify = false;
      } else if (!document.mail_frm.subject_txt.value) {
        alert("The subject field is required!");
        document.mail_frm.subject_txt.focus();
        verify = false;
      } else if (!document.mail_frm.file_fls.value) {
        alert("The files upload is required!");
        document.mail_frm.file_fls.focus();
        verify = false;
      } else if (!document.mail_frm.message_txa.value) {
        alert("The Message field is required!");
        document.mail_frm.message_txa.focus();
        verify = false;
      }
      if (verify) {
        document.mail_frm.submit();
      }
    }

    window.onload = function() {
      document.mail_frm.send_btn.onclick = formValidation;
    }
  </script>
</body>

</html>