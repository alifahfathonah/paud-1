<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id         = $_POST['id'];
$first_name	=$_POST['first_name'];
$last_name	=$_POST['last_name'];
$gender		=$_POST['gender'];
$address	=strip_tags($_POST['address']);
$email_addr	=$_POST['email_addr'];
$phone_number	=$_POST['phone_number'];
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

$query_r = "UPDATE peserta SET
                first_name = '$first_name',
                last_name = '$last_name',
                gender = '$gender',
                address = '$address',
                email_addr = '$email_addr',
                phone_number = '$phone_number',
                photo ='$photo_file' 
            WHERE id = '$id' ";

$r = $database->execsql($query_r);

header ("Location: tampildata_peserta.php");
exit;
?>