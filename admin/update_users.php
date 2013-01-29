<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id         = $_POST['user_id'];
$user_name  = $_POST['user_name'];
$user_pass  = sha1($_POST['user_pass']);

$query_r = "UPDATE users SET
                user_name = '$user_name',
                user_pass = '$user_pass'
            WHERE user_id = '$id' ";
//echo debug($query_r);            
$r = $database->execsql($query_r);

header ("Location: tampildata_users.php");
exit;
?>