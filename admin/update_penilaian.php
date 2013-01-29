<?php require_once('Connections/koneksi.php'); 

$idk = $_POST['Id_Karyawan'];
$nama = $_POST['Nama'];
$loyalitas = $_POST['loyalitas'];
$disiplin = $_POST['disiplin'];
$hubungan = $_POST['hubungan'];
$tanggungjawab = $_POST['tanggungjawab'];
$kepemimpinan = $_POST['kepemimpinan'];
$prestasi = $_POST['prestasi'];

$query_r = "UPDATE penilaian SET Nama = '$nama', loyalitas = '$loyalitas', disiplin = '$disiplin', hubungan='$hubungan',tanggungjawab='$tanggungjawab', kepemimpinan = '$kepemimpinan',
 prestasi = '$prestasi' WHERE Id_Karyawan = '$idk' ";
$r = mysql_query($query_r, $koneksi) or die(mysql_error());

header ("Location: edit_hapus_penilaian.php");
exit;
?>