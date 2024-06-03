if(!$_COOKIE["rqstd_language"]) {
  header("Location: request_language.php");
 } else if ($_COOKIE["rqstd_language"] == "es"){
  header("Location: spanish.php");
 } else if($_COOKIE["rqstd_language"]== "en") {
  header("Location: english.php");
 }