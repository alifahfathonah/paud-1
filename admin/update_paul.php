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
$address	=strip_tags($_POST['address']);
$email_addr	=$_POST['email_addr'];
$phone_number	=$_POST['phone_number'];

$query_r = "UPDATE kontak SET
                first_name = '$first_name',
                last_name = '$last_name',
                address = '$address',
                email_addr = '$email_addr',
                phone_number = '$phone_number'
            WHERE id = '$id' ";

$r = $database->execsql($query_r);

header ("Location: editdata_paul.php");
exit;
?>