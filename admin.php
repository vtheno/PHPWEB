<?php
$PageTitle = "admin";
include_once ('setting.php');
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username= $_POST['username'];
    $password= $_POST['password'];
    if ($username == $cfg_username and $password == $cfg_password){
        $_SESSION["usr"] = $username;
        $body = include_once ('admin_body.php');   
    }
    else{
        $_SESSION["msg"] = "username or password wrong.";
        header("location:index.php");
    }
}else{
    if ( empty($_SESSION["usr"]) ) {
        $_SESSION["msg"] = "please login!";
        header("location:index.php");
    }else{
        $username = $_SESSION["usr"];
        $body = include_once ('admin_body.php');
    }
}
?>
