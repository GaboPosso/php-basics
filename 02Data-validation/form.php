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
    <label>Masculino&nbsp;</label>
    <input type="radio" name="gender_rdo" value="F">
    <label>Femenino&nbsp;</label>
    <br><br>
    <input type="hidden" name="send_hdn" value="get">
    <input id="send-get" type="button" name="send_btn" value="GET send" >
<script>
  // const getDataValidation = () => {
  //   let check = true,
  //     d = document;

  //   if(!d.data_validate_get_frm.name_txt.value){
  //     alert("The Name field is required!");
  //     d.data_validate_get_frm.name_txt.focus();
  //     check = false;
  //   } else if (!d.data_validate_get_frm.pwd_txt.value) {
  //     alert("The Password field is required!");
  //     d.data_validate_get_frm.pwd_txt.focus();
  //     check = false;
  //   } else if (!d.data_validate_get_frm.gender_rdo[0].checked && !d.data_validate_get_frm.gender_rdo[1].checked) {
  //     alert("Gender field is required!");
  //     d.data_validate_get_frm.gender_rdo[0].focus();
  //     check = false;
  //   }
  // }
  // window.onload = function() {
  //     document.getElementById("send-get").onclick = getDataValidation;
  //   }
  const getDataValidation = () => {
  const d = document;
  const nameValue = d.data_validate_get_frm.name_txt.value;
  const pwdValue = d.data_validate_get_frm.pwd_txt.value;
  const genderChecked = d.data_validate_get_frm.gender_rdo[0].checked || d.data_validate_get_frm.gender_rdo[1].checked;

  if (!nameValue) {
    alert("The Name field is required!");
    d.data_validate_get_frm.name_txt.focus();
    return false;
  } else if (!pwdValue) {
    alert("The Password field is required!");
    d.data_validate_get_frm.pwd_txt.focus();
    return false;
  } else if (!genderChecked) {
    alert("Gender field is required!");
    d.data_validate_get_frm.gender_rdo[0].focus();
    return false;
  }
  return true;
};

window.onload = () => {
  document.getElementById("send-get").onclick = getDataValidation;
};


</script>
</body>
</html>