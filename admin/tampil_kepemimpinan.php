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
			<br>
			
           <table width=100% align="center" border="0">
    <td width="92%" align=right><form name="formcari" method="post" action="tampil_kepemimpinan.php">
      <div align="right"><font size="3" face="Times New Roman, Times, serif" color="#000000">ID Karyawan :
               <input type="text" name="name" size=24>
			   <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search">
      </div>
    </form>
	<td></td>
	<td width="8%">
      <div align="rights">
	  <form>
	    <input type=submit value=Refresh>
	  </form>
	  </span>
        </div>
      </td>
	  </tr>
	  </table><br>  

<?php
/*
Terimakasih telah mendownload tutorial ini.
Silahkan tuliskan pertanyaan atau komentar anda pada http://www.media-kreatif.com
Kirimkan request anda seputar pemrograman php pada  http://media-kreatif.com/request-tutorial.prm
*/
include_once("config.php"); //panggil script koneksi
include_once("ClassPaging.php"); //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
$limit = 10; 

//buat query
$query = new CnnNav($limit,'penilaian','*','Id_Karyawan');

//jalankan querynya
$result = $query ->getResult();
//perintah diatas sama dengan perintah mysql_query
include "connect.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from penilaian where Nama like '%$name%' or Id_Karyawan like '%$name' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
?>
<style>
	table{
		border:silver 1px solid;
	}
	table td{
		border-bottom:silver 1px solid;
		border-right:silver 1px solid;
		padding:0 0 0 5px;
	}
</style>
<table width="938" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br>
    <div align="center"><strong>Tabel Penilaian Kepemimpinan Kerja Karyawan </strong></div>
    <br></td>
  </tr>
  <tr> 
    <td height="25" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>ID Karyawan</strong></div></td>
    <td width="494" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000">
      <div align="center"><strong>Nama</strong></div></td>
    
	<td width="231" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000">
	  <div align="center"><strong>Kepemimpinan</strong></div></td>
	
  </tr>
<?PHP
//membuat penomoran posting
$nomor = ($limit * $_GET['offset'])+1; 
while($data = mysql_fetch_array($result))
{
?>
  <tr bgcolor="#FFFFFF">
    <td bgcolor=#00000 width="211" height="20" align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['Id_Karyawan']; ?></td>
    <td height="50" align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['Nama']; ?></td>
    
	<td align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['kepemimpinan']; ?></td>
	
    
  </tr>
<?PHP
$nomor++;
}
?>
  <tr>
    <td height="25" colspan="8" align="center" valign="bottom">
		<p>&nbsp;	    </p>
		<p><b>
		  <?php 
			$query->printNav(); //Cetak paging
		?>
		</b></p>
	  </td>
  </tr>
</table>

        
            <div id="footer">
                <a href="../admin/karyawan.php">PT. Maretska Kirana Technologies</a> 2012.<br><br>
                Version 1.0
            </div>
        </div>
    </body>
</html>
