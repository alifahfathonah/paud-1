<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id         = $_POST['user_id'];
$user_name  = $_POST['user_name'];
$user_pass  = $_POST['user_pass'];
$tmp_file   = $_FILES['user_photo']['tmp_name'];
$t=explode(".",$_FILES['user_photo']['name']);
$filename   = md5($_FILES['user_photo']['name'].date("Ymdhis")).".".$t[1];
$photo      = $_POST['photo'];

if($user_pass) {
    $q="user_pass='".sha1($user_pass)."', ";
}

if($tmp_file) {
    move_uploaded_file($tmp_file,IMG_FOLDER."/users/".$filename);
    $photo_file= $filename;
} else {
    $photo_file= $photo;
}

$query_r = "UPDATE users SET
                user_name = '$user_name', ".$q." 
                photo ='$photo_file' 
            WHERE user_id = '$id' ";
//echo debug($query_r);            
$r = $database->execsql($query_r);

header ("Location: tampildata_users.php");
exit;
?>