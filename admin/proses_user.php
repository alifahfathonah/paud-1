<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$user_name=$_POST['user_name'];
$user_pass=$_POST['user_pass'];

$tmp_file   = $_FILES['user_photo']['tmp_name'];
$t=explode(".",$_FILES['user_photo']['name']);
$filename   = md5($_FILES['user_photo']['name'].date("Ymdhis")).".".$t[1];
$photo      = $_POST['photo'];

if($tmp_file) {
    move_uploaded_file($tmp_file,IMG_FOLDER."/users/".$filename);
    $photo_file= $filename;
} else {
    $photo_file= $photo;
}


$sql="iNSERT INTO users (`user_name`, `user_pass`,`photo`,`user_createddate`) values('".$user_name."', '".sha1($user_pass)."','".$photo_file."',NOW())";
$database->execsql($sql);
header ("Location: tampildata_users.php");
exit;
?>

