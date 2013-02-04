 <?php 
//session_start();
 //   include "../connection/koneksi.php";

  //  if(!isset($_SESSION['username']))
   // {
   //     header('Location: index.php');	
   // }
//?> 

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

<center><h3>Input Data Karyawan</h3>
<form method=post action=proses-input-kry.php>
<table width="831" cellpadding = 2 cellspacing = 10 border="0" > 
<tr><td width="176" height="38">No. Induk Karyawan </td>	
<td width="391"> :
  <input name="Id_Karyawan" type="text" value="" size="75"></td>
</tr>
<tr><td height="43">Nama Karyawan</td>		
<td> : 
  <input type = text size = '75' name = 'Nama'></td></tr>
<tr><td>Alamat</td>			
<td> : 
  <textarea name="Alamat" cols="57"></textarea></td></tr>
<tr><td>TTL</td>			
<td> : 
  <input name="Ttl" type="text" value="" size="75"></td></tr>
<tr><td>Telp.</td>			
<td> : 
  <input  type = text size="75" name = 'No_telp'></td></tr>
<tr><td>Divisi</td>			
<td> : 
  <input type = text size = '75' name = 'devisi'></td></tr>

<tr><td colspan=2> 
  
      <div align="right" >
        <input name="Submit" type=submit value=simpan>
        <input type=reset value=Batal>
      </div></td></tr>
</table>
</form> 
</center>

</div>
            <div id="footer">
                <a href="../admin/karyawan.php">PT. Maretska Kirana Technologies</a> ©2012.<br><br>
                Version 1.0
            </div>
        </div>
    </body>
</html>
