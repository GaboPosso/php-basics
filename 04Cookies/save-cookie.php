<?
// To make sure the cookie works it's better to specify the directory
// routing on the fourth parameter with "/", it's given that the cookie
// will exist in all the site directories
setcookie("rqstd_language", $_GET["lang"], time() + 86400, "/");
header("Location: use-cookie.php");

?>