<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}
include  ADMIN_FOLDER."/includes/header.php"; 
	
# Baca variabel Form (If Register Global ON)
$TxtJawaban  = $_POST['TxtJawaban'];
$TxtPenjawab = $_POST['TxtPenjawab'];
$TxtIdTanya  = $_POST['TxtIdTanya'];

# Validasi Form
if (trim($TxtJawaban)=="") {
	echo "Jawaban belum diisi, ulangi kembali";
	include "konsultasijawabfm.php";
}
elseif (trim($TxtPenjawab)=="") {
	echo "Nama penjawab belum diisi, ulangi kembali";
	include "konsultasijawabfm.php";
}
else {
	$sql = "INSERT INTO konsultasi_jawab(id_tanya,jawaban,penjawab,tanggal)
			VALUES ('$TxtIdTanya','$TxtJawaban','$TxtPenjawab',NOW())";
	//echo debug($sql);
	$database->execsql($sql);
	//exit();
		  
	header('Location: jawab_index.php?admin=jawab');
}
?>
