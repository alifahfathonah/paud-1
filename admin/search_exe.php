<?php
include "connect.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from karyawan where Nama like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['Id_Karyawan']."</td>
<td>".$data['Nama']."</td>
<td>".$data['Alamat']."</td>
<td>".$data['Ttl']."</td>
<td>".$data['No_telp']."</td>
<td>".$data['devisi']."</td>
</tr>";
}
echo "</table>";
?>