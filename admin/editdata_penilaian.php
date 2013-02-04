
 <?php require_once('Connections/koneksi.php'); 

$nomor = $_GET['id'];

$query_r = "SELECT * FROM penilaian WHERE Id_Karyawan = '$nomor'";
$r = mysql_query($query_r, $koneksi) or die(mysql_error());
$row = mysql_fetch_row($r);

?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home | Administration Page</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" />  
		<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #99CC66;
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
td {font-family: Verdana, Arial;font-size: 12px;color:#000000;}
-->
</style>    
    </head>
    <body>
        <div id="container">
		<br>
            <div id="header">
               <br><center>
                    PT. Maretska Kirana Technologies 
					<br>
            		ADMINISTRATRATOR                   
                  </center>
                
            </div>
           <div id="menu">
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
                    <li><a href="home.php#" class="dir" style="cursor: pointer">Dashboard</a>
                    </li>
					<li><a  class="dir" style="cursor: pointer">Karyawan</a>
					<ul>
					 <li><a href="karyawan.php">Tambah Data Karyawan</a></li>
					 <li><a href="tampildata_karyawan.php">Tabel Data Karyawan</a></li>
					 <li><a href="edit_hapus_karyawan.php"> Hapus / Edit Data Karyawan</a></li>
					 </ul>
                    </li>
					<li><a class="dir" style="cursor: pointer">Penilaian</a>
                        <ul>
                             <li><a href="tambah_penilaian.php">Tambah Penilaian Karyawan</a></li>
                           <li><a href="tampildata_penilaian.php">Tabel Penilaian Karyawan</a></li>
					       <li><a href="edit_hapus_penilaian.php"> Hapus/Edit Penilaian Karyawan</a></li>
                        </ul>
                    </li>
                    </li>
                   <li><a class="dir" style="cursor: pointer">Nilai Prestasi</a>
                        <ul>
                             <li><a href="tampildata_loyalitas.php">Nilai Loyalitas Kerja </a></li>
                            <li><a href="tampil_disiplin.php">Nilai Disiplin Kerja</a></li>
							<li><a href="tampil_hubungan.php">Nilai Hubungan Kerja</a></li>
							<li><a href="tampil_tanggungjawab.php">Nilai Tanggung Jawab Kerja</a></li>
							<li><a href="tampil_kepemimpinan.php">Nilai Kepemimpinan Kerja</a></li>
							<li><a href="tampil_prestasi.php">Nilai Prestasi Karyawan</a></li>
                        </ul>
                   </li>
                    
                     <li><a class="dir" style="cursor: pointer">Nilai Total</a>
					<ul>
					<li><a href="nilai_total.php"> Total Penilaian Kinerja Karyawan</a></li>
					</ul>
                    </li>
					<li><a class="dir" style="cursor: pointer">Master</a>
                        <ul>
                             <li><a href="user.php">Users</a></li>
                        </ul>
                    </li>
                 </ul>

                 <!-- Menu Bagian Kanan -->
                 <ul class="dropdown dropdown-horizontal"  style="float: right;">
                    <li><a href="home.php" style="cursor: pointer">Home Web</a></li>
                     <li><a href="logout.php#" class="dir" style="cursor: pointer">Logout</a></li>
                 </ul>
            </div>
			
			<br>
			
           

<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Edit Data Karyawan </strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=update_penilaian.php method="POST" name="formedit" id="formedit">
    <input name="Id_Karyawan" type="hidden" value="<?php echo $row[0];?>">
      <table width="709" border="1" align="center">
          <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama</td>
          <td><input name="Nama" type="text" size="70" id="Nama" value="<?php echo $row[1];?>"></td>
        </tr>
        <tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Loyalitas</td>
          <td width="530"><input name="loyalitas" size="70" type="text" id="loyalitas" value="<?php echo $row[2];?>"></td>
        </tr>
        <tr>
          <td height="35"><font size="3" face="Times New Roman, Times, serif" color="#000000">Disiplin </td>
          <td><input name="disiplin" type="text" size="70" id="disiplin" value="<?php echo $row[3];?>"></td>
        </tr>
        <tr>
          <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Hubungan </td>
          <td><input name="hubungan" type="text" size="70" id="hubungan" value="<?php echo $row[4];?>"></td>
        </tr>
		<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Tanggung Jawab </td>
          <td> <input name="tanggungjawab" type="text" size="70" id="tanggungjawab" value="<?php echo $row[5];?>"></td>
        </tr>
		<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Kepemimpinan </td>
          <td> <input name="kepemimpinan" type="text" size="70" id="kepemimpinan" value="<?php echo $row[6];?>"></td>
        </tr>
		<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Prestasi </td>
          <td> <input name="prestasi" type="text" size="70" id="prestasi" value="<?php echo $row[7];?>"></td>
        </tr>
		 <tr>
          <td height="34">&nbsp;</td>
          <td><input type="submit" name="Submit" value="Edit">
            <input type="reset" name="Reset" value="Batal"></td>
        </tr>
      </table>
      
      <input type="hidden" name="MM_update" value="formedit">
    </form></td>
  </tr>
    </table>
	

        
            <div id="footer">
                <a href="../admin/karyawan.php">PT. Maretska Kirana Technologies</a> 2012.<br><br>
                Version 1.0
            </div>
        </div>
    </body>
</html>

<?php
mysql_free_result($r);
?>