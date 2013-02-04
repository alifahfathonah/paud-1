<?php
session_start();
    
require_once("../config.php");


if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}
$id             = $_POST['id_materi'];
$kd_matakuliah  = $_POST['kd_matakuliah'];
$bab_nama       = $_POST['bab_nama'];
$bab_judul      = $_POST['bab_judul'];
$definisi	=strip_tags($_POST['definisi']);
$tmp_file   = $_FILES['materi_file']['tmp_name'];
$t=explode(".",$_FILES['materi_file']['name']);
$filename   = md5($_FILES['materi_file']['name'].date("Ymdhis")).".".$t[1];
$materi      = $_POST['materi'];

if($tmp_file) {
    move_uploaded_file($tmp_file,MATERIAL_FOLDER."/".$filename);
    $materi_file= $filename;
} else {
    $materi_file= $photo;
}

$query_r = "UPDATE materi SET
                kd_matakuliah = '$kd_matakuliah',
                bab_nama = '$bab_nama',
                bab_judul = '$bab_judul',
                definisi = '$definisi',
                file_data ='$materi_file' 
            WHERE id_materi = '$id' ";
//echo debug($query_r);
$r = $database->execsql($query_r);

header ("Location: tampildata_materi.php");
exit;
?>