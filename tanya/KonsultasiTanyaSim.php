<?php
include "konfigurasi.php";
	
# Baca variabel Form (If Register Global ON)
$CmbMatakuliah = $_POST['CmbMatakuliah'];
$TxtPertanyaan = $_POST['TxtPertanyaan'];
$TxtPenanya    = $_POST['TxtPenanya'];

# Validasi Form
if (trim($CmbMatakuliah)=="NULL") {
	echo "Kategori belum dipilih, ulangi kembali";
	include "KonsultasiTanyaFm.php";
}
elseif (trim($TxtPertanyaan)=="") {
	echo "Judul kategori belum diisi, ulangi kembali";
	include "KonsultasiTanyaFm.php";
}
elseif (trim($TxtPenanya)=="") {
	echo "Nama penanya belum diisi, ulangi kembali";
	include "KonsultasiTanyaFm.php";
}
else {
	$sql = "INSERT INTO konsultasi_tanya(kd_matakuliah,pertanyaan,penanya,tanggal)
			VALUES ('$CmbMatakuliah','$TxtPertanyaan','$TxtPenanya',NOW())";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error: ".mysql_error());
	header('Location: ../index.php?aksi=tanya&menu=2&kdmakul='.$CmbMatakuliah);
}
?>
