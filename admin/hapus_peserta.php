<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id = $_GET['id'];

$sql = "DELETE FROM peserta WHERE id = '$id'";
$res = $database->execsql($sql);

include "tampildata_peserta.php";


?>