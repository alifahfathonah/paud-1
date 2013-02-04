
<?php
include '../connection/koneksi.php';
?>

<?php
//panggil file config.php untuk menghubung ke server



//tangkap data dari form
$nik= $_POST['Id_Karyawan'];
$nama = $_POST['Nama'];
$alt = $_POST['Alamat'];
$ttl = $_POST['Ttl'];
$tlp =  $_POST['No_telp'];
$devisi =  $_POST['devisi'];

if(empty($nik)) {
echo "<script>alert('Maaf , NIK tidak boleh kosong !'); history.back(); </script>";
exit;
}

if(empty($nama)) {
echo "<script>alert('Maaf , Nama tidak boleh kosong !'); history.back(); </script>";
exit;
}

if(empty($ttl)) {
echo "<script>alert('Maaf , Alamat tidak boleh kosong'); history.back(); </script>";
exit;
}


if(empty($alt)) {
echo "<script>alert('Maaf , Ttl tidak boleh kosong'); history.back(); </script>";
exit;
}

if(empty($tlp)) {
echo "<script>alert('Maaf , No_telp tidak boleh kosong'); history.back(); </script>";
exit;
}


if(empty($devisi)) {
echo "<script>alert('Maaf , devisi tidak boleh kosong'); history.back(); </script>";
exit;
}


$sql = mysql_query("insert into karyawan values('$nik', '$nama','$alt', '$ttl', '$tlp', '$devisi')") 
or die(mysql_error());

mysql_query($sql);
echo "<script>alert('Penyimpanan Berhasil');window.location.href='tampildata_karyawan.php'</script>";

?>