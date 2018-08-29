<?php
$PageTitle = "login";
include_once ('setting.php');
if ( empty($_SESSION["usr"]) ){
$login_msg = $_SESSION["msg"];
$body = include_once ('login_body.php');
$_SESSION["msg"] = '';
}else{
header("location: admin.php");
}
?>
