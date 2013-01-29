<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE user_id = '$id'";
$res = $database->execsql($sql);

include "tampildata_users.php";


?>