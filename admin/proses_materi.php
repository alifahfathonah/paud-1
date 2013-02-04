<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

$kd_matakuliah  =$_POST['kd_matakuliah'];
$bab_nama	=$_POST['bab_nama'];
$bab_judul	=$_POST['bab_judul'];
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


$sql="INSERT INTO materi
       (`kd_matakuliah`, `bab_nama`,`bab_judul`,`definisi`,`file_data`,`tanggal`) values
       ('".$kd_matakuliah."', '".$bab_nama."','".$bab_judul."','".$definisi."','".$materi_file."',NOW())";
//echo debug($sql);
$database->execsql($sql);
header ("Location: tampildata_materi.php");
exit;
?>

