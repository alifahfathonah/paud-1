<?php
include "../../konfigurasi.php";
	
# Baca variabel Form (If Register Global ON)
$TxtJawaban  = $_POST['TxtJawaban'];
$TxtPenjawab = $_POST['TxtPenjawab'];
$TxtIdTanya  = $_POST['TxtIdTanya'];

# Validasi Form
if (trim($TxtJawaban)=="") {
	echo "Jawaban belum diisi, ulangi kembali";
	include "KolsultasiJawabFm.php";
}
elseif (trim($TxtPenjawab)=="") {
	echo "Nama penjawab belum diisi, ulangi kembali";
	include "KolsultasiJawabFm.php";
}
else {
	$sql = "INSERT INTO konsultasi_jawab(id_tanya,jawaban,penjawab,tanggal)
			VALUES ('$TxtIdTanya','$TxtJawaban','$TxtPenjawab',NOW())";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
		  
	header('Location: ../index.php?admin=jawab');
}
?>
