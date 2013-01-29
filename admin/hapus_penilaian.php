<script language="JavaScript">
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>
<?php require_once('Connections/koneksi.php'); ?>
<?php

$id = $_GET['id'];

$sql = "DELETE FROM penilaian WHERE Id_Karyawan = '$id'";
$res = mysql_query($sql);

include "edit_hapus_penilaian.php";


?>