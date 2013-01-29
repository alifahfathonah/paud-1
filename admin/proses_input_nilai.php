
<?php
include '../connection/koneksi.php';
?>

<?php
//panggil file config.php untuk menghubung ke server



//tangkap data dari form
$nik= $_POST['Id_Karyawan'];
$nama = $_POST['Nama'];
$ttl = $_POST['loyalitas'];
$alt = $_POST['disiplin'];
$tlp =  $_POST['hubungan'];
$divisi =  $_POST['tanggungjawab'];
$tlp1 =  $_POST['kepemimpinan'];
$divisi1 =  $_POST['prestasi'];

if(empty($nik)) {
echo "<script>alert('Maaf , NIK tidak boleh kosong !'); history.back(); </script>";
exit;
}

if(empty($nama)) {
echo "<script>alert('Maaf , Nama tidak boleh kosong !'); history.back(); </script>";
exit;
}

if(empty($ttl)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}


if(empty($alt)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}

if(empty($tlp)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}


if(empty($divisi)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}

if(empty($tlp1)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}

if(empty($divisi1)) {
echo "<script>alert('Maaf , Data tidak boleh kosong'); history.back(); </script>";
exit;
}


$sql = mysql_query("insert into penilaian values('$nik', '$nama','$alt', '$ttl', '$tlp', '$divisi', '$tlp1', '$divisi1')") 
or die(mysql_error());

mysql_query($sql);
echo "<script>alert('Penyimpanan Berhasil');window.location.href='tampildata_penilaian.php'</script>";

?>