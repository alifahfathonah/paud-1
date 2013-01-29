 <?php 
//session_start();
 //   include "../connection/koneksi.php";

  //  if(!isset($_SESSION['username']))
   // {
   //     header('Location: index.php');	
   // }
//?> 
<?php require_once('Connections/koneksi.php'); 

$nomor = $_GET['id'];

$query_r = "SELECT * FROM karyawan WHERE Id_Karyawan = '$nomor'";
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
        <title>..:: Administrator ::..</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" />      
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
            <div id="content" style="min-height: 400px"> 

<center><h3>Input Data Penilaian Karyawan</h3>
<form method=post action=proses_input_nilai.php>
<table width="852" cellpadding = 2 cellspacing = 10 border="0" > 
<tr><td width="176">No. Induk Karyawan </td>	
<td width="451"> :
  <input name="Id_Karyawan" type="text" value="<?php echo $row[0];?>" size="55"></td>
</tr>
<tr><td>Nama Karyawan</td>		
<td> : <input type = text size = '55' name = 'Nama' value="<?php echo $row[1];?>"></td></tr>
<tr><td>Loyalitas</td>			
<td> : 
  <input type = text size = '55' name = 'loyalitas'>
  Nilai Bobot 0.23</td>
</tr>
<tr><td>Disiplin</td>			
<td> : 
  <input type = text size = '55' name = 'disiplin'>
  Nilai Bobot 0.093 </td>
</tr>
<tr><td>Hubungan.</td>			
<td> : 
  <input name = 'hubungan' type = text size="55">
  Nilai Bobot 0.143 </td>
</tr>
<tr><td>Tanggung Jawab</td>		
<td> : 
  <input type = text size = '55' name = 'tanggungjawab'>
  Nilai Bobot 0.216 </td>
</tr>
<tr><td>Kepemimpinan</td>		
<td> : 
  <input type = text size = '55' name = 'kepemimpinan'>
  Nilai Bobot 0.15 </td>
</tr>
<tr><td>Prestasi</td>			
<td> : 
  <input type = text size = '55' name = 'prestasi'>
  Nilai Bobot 0.16 </td>
</tr>
<tr>
<td colspan="2">
  <p align="left">Rumus : </p>
  <p align="left">(Loyalitas*0.23) + (Disiplin*0.093) + (Hubungan*0.143) + (Tanggung jawab*0.216) + (Kepemimpinan*0.15) + (Prestasi*0.16)</p>
  <p>&nbsp;  </p></td>
</tr>

<tr>
  <td colspan=2>
    
      <div align="right">
        <input name="Submit" type=submit value=simpan>
        <input type=reset value=Batal>
      </div></td></tr>
</table>
</form> 
</center>

</div>
            <div id="footer">
                <a href="../admin/karyawan.php">PT. Maretska Kirana Technologies</a> �2012.<br><br>
                Version 1.0
            </div>
        </div>
    </body>
</html>
