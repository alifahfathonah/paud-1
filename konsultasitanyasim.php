<?php
include 'config.php';
	
# Baca variabel Form (If Register Global ON)
$TxtPertanyaan = $_POST['TxtPertanyaan'];
$TxtPenanya    = $_POST['TxtPenanya'];

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
	//echo debug($sql);
	$database->execsql($sql);
	header('Location: index.php?aksi=tanya&menu=2');
}
?>
