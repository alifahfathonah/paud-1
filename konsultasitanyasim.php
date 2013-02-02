<?php
include_once 'config.php';
	
# Baca variabel Form (If Register Global ON)
$TxtPertanyaan = (!isset($_POST['TxtPertanyaan']))?'':$_POST['TxtPertanyaan'];
$TxtPenanya    = (!isset($_POST['TxtPenanya']))?'':$_POST['TxtPenanya'];

# Validasi Form
if (trim($TxtPertanyaan)=="") {
	echo "Judul kategori belum diisi, ulangi kembali";
	include "konsultasitanyafm.php";
}
elseif (trim($TxtPenanya)=="") {
	echo "Nama penanya belum diisi, ulangi kembali";
	include "konsultasitanyafm.php";
}
else {
	$sql = "INSERT INTO konsultasi_tanya(pertanyaan,penanya,tanggal)
			VALUES ('$TxtPertanyaan','$TxtPenanya',NOW())";
	
	$database->execsql($sql);
	header('Location: index.php?aksi=tanya&menu=2');
}
?>
