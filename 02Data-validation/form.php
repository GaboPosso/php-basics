<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Validation</title>
</head>
<body>
  <hgroup><h1>Data Form GET</h1></hgroup>
  <form name="data_validate_get_frm" action="data-validate.php" method="get" enctype="application/x-www-form-urlencoded">
    <label>Enter your name:</label>
    <input type="text" name="name_txt">
    <br><br>
    <label>Enter your password:</label>
    <input type="password" name="pwd_txt">
    <br><br>
    <input type="radio" name="gender_rdo" value="M">
    <label>Male&nbsp;</label>
    <input type="radio" name="gender_rdo" value="F">
    <label>Female&nbsp;</label>
    <br><br>
    <input type="hidden" name="send_hdn" value="get">
    <input id="send-get" type="button" name="send_btn" value="GET send" >
  </form>

  <hgroup><h1>Data Form POST</h1></hgroup>
  <form name="data_validate_post_frm" action="data-validate.php" method="post" enctype="application/x-www-form-urlencoded">
    <label>Enter your name:</label>
    <input type="text" name="name_txt">
    <br><br>
    <label>Enter your password:</label>
    <input type="password" name="pwd_txt">
    <br><br>
    <input type="radio" name="gender_rdo" value="M">
    <label>Male&nbsp;</label>
    <input type="radio" name="gender_rdo" value="F">
    <label>Female&nbsp;</label>
    <br><br>
    <input type="hidden" name="send_hdn" value="post">
    <input id="send-post" type="button" name="send_btn" value="POST send" >
  </form>
  
<script>
  const getDataValidation = () => {
  const d = document;
  let check = true;
  let nameValue = d.data_validate_get_frm.name_txt.value;
  let pwdValue = d.data_validate_get_frm.pwd_txt.value;
  let genderChecked = d.data_validate_get_frm.gender_rdo[0].checked || d.data_validate_get_frm.gender_rdo[1].checked;

  if (!nameValue) {
    alert("The Name field is required!");
    d.data_validate_get_frm.name_txt.focus();
    check = false;
  } else if (!pwdValue) {
    alert("The Password field is required!");
    d.data_validate_get_frm.pwd_txt.focus();
    check = false;
  } else if (!genderChecked) {
    alert("Gender field is required!");
    d.data_validate_get_frm.gender_rdo[0].focus();
    check = false;
  }  if(check) {
    d.data_validate_get_frm.submit();
  }
};

const postDataValidation = () => {
  const d = document;
  let nameValue = d.data_validate_post_frm.name_txt.value;
  let pwdValue = d.data_validate_post_frm.pwd_txt.value;
  let genderChecked = d.data_validate_post_frm.gender_rdo[0].checked || d.data_validate_post_frm.gender_rdo[1].checked;
  let check = true;
  if (!nameValue) {
    alert("The Name field is required!");
    d.data_validate_post_frm.name_txt.focus();
    check = false;
  } else if (!pwdValue) {
    alert("The Password field is required!");
    d.data_validate_post_frm.pwd_txt.focus();
    check = false;
  } else if (!genderChecked) {
    alert("Gender field is required!");
    d.data_validate_post_frm.gender_rdo[0].focus();
    check = false;
  }
  if(check) {
    d.data_validate_post_frm.submit();
  }
};


window.onload = () => {
  document.getElementById("send-get").onclick = getDataValidation;
  document.getElementById("send-post").onclick =postDataValidation;
};


</script>
</body>
</html>