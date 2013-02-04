<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

//echo debug($_POST);
//echo debug($_FILES);
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


$sql="INSERT INTO peserta
       (`first_name`,`last_name`,`gender`,`address`,`email_addr`,`phone_number`,
        `photo`,`createddate`) values
       ('".$first_name."','".$last_name."','".$gender."','".
       $address."', '".$email_addr."', '".$phone_number."', '".$photo_file."',NOW())";
//echo debug($sql);
$database->execsql($sql);
header ("Location: tampildata_peserta.php");
exit;
?>

