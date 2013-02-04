<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$id         = $_POST['page_id'];
$titletags  = $_POST['titletags'];
$metakey    = $_POST['metakey'];
$metadesc   = $_POST['metadesc'];
$url        = $_POST['url'];
$title      = $_POST['title'];
$sum        = strip_tags($_POST['sum']);
$descr       = strip_tags($_POST['descr']);

$query_r = "UPDATE page_content SET
                titletags = '$titletags',
                metakey = '$metakey',
                metadesc = '$metadesc',
                url= '$url',
                title = '$title',
                sum = '$sum',
                descr = '$descr'
            WHERE id = '$id' ";
//echo debug($query_r);            
$r = $database->execsql($query_r);

header ("Location: editdata_misi.php");
exit;
?>