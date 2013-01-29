<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$user_name=$_POST['user_name'];
$user_pass=$_POST['user_pass'];

$sql="iNSERT INTO users (`user_name`, `user_pass`,`user_createddate`) values('".$user_name."', '".sha1($user_pass)."',NOW())";
$database->execsql($sql);
header ("Location: tampildata_users.php");
exit;
?>

