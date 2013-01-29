<?php require_once('Connections/koneksi.php'); ?>
<?php
$cari = $_GET['cari'];

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_n = 100;
$pageNum_n = 0;
if (isset($_GET['pageNum_n'])) {
  $pageNum_n = $_GET['pageNum_n'];
}
$startRow_n = $pageNum_n * $maxRows_n;

mysql_select_db($database_koneksi, $koneksi);
$query_n = "SELECT * FROM penilaian";

if ($cari != "")
	$query_n .= " WHERE Nama LIKE '%$cari%' or Id_Karyawan LIKE '%$cari'";

$query_limit_n = sprintf("%s LIMIT %d, %d", $query_n, $startRow_n, $maxRows_n);
$n = mysql_query($query_limit_n, $koneksi) or die(mysql_error());
$row_n = mysql_fetch_assoc($n);

if (isset($_GET['totalRows_n'])) {
  $totalRows_n = $_GET['totalRows_n'];
} else {
  $all_n = mysql_query($query_n);
  $totalRows_n = mysql_num_rows($all_n);
}
$totalPages_n = ceil($totalRows_n/$maxRows_n)-1;

$queryString_n = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_n") == false && 
        stristr($param, "totalRows_n") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_n = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_n = sprintf("&totalRows_n=%d%s", $totalRows_n, $queryString_n);
?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
	<script language="JavaScript">
function warning() {
    return confirm('Yakin ingin menghapus data ini ?');
}
</script>
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
			
           <table width=100% align="center" border="0">
    <td width="92%" align=right><form>
      <div align="right"><font size="3" face="Times New Roman, Times, serif" color="#000000">ID Karyawan :
               <input type=text name=cari size=24>
			   <input type=submit value=Cari>
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
 
<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="10" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Tabel Master Data Karyawan </strong></div><br></td>
  </tr>
      <tr bgcolor=#cccccc height=20>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">ID Karyawan</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Loyalitas</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Disiplin</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Hubungan</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Tanggung Jawab</div></td>
		<td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Kepemimpinan</div></td>
		<td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Prestasi</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Edit</div></td>
        <td><div align="center"><font size="3" face="Times New Roman, Times, serif" color="#000000">Hapus</div></td>
      </tr>
 <tr bgcolor=#cccccc>
       
    </tr>	
     <?php 
	$rumus = $_GET['rumus'];
	
	if (empty($rumus))
		$rumus = 3;
	
	switch ($rumus) {
	case 1 : $x = 0.2; $y = 0.3; $z = 0.5; break;
	case 2 : $x = 0.1; $y = 0.3; $z = 0.6; break;
	case 3 : $x = 0.3; $y = 0.3; $z = 0.4; break;	
	}
      $i = 0;
     do { 
		$angka = ceil(($row_n['FOR']*$x) + ($row_n['UTS']*$y) + ($row_n['UAS']*$z));
		if ($angka >= 80)
			$huruf = "A";
		elseif ($angka >= 68)
			$huruf = "B";
		elseif ($angka >= 59)
			$huruf = "C";
		elseif ($angka >= 49)
			$huruf = "D";
		
		if ($i % 2 == 0) $bg = "#e8e8e8";
			else $bg = "#FFFFFF";
		$i++;
    ?>
       <tr align=center bgcolor=<?php echo $bg;?> onMouseOver="this.style.backgroundColor='#dedede'" onMouseOut="this.style.backgroundColor='<?php echo $bg;?>'">
          <td height="50"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['Id_Karyawan']; ?>
            <div align="center"></div></td>
          <td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['Nama']; ?>
            <div align="center"></div></td>
          <td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['loyalitas']; ?>
            <div align="center"></div></td>
          <td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['disiplin']; ?>
            <div align="center"></div></td>
          <td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['hubungan']; ?>
            <div align="center"></div></td>
			<td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['tanggungjawab']; ?>
            <div align="center"></div></td>
			<td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['kepemimpinan']; ?>
            <div align="center"></div></td>
			<td><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $row_n['prestasi']; ?>
            <div align="center"></div></td>
          
          <td><div align="center"><a href="editdata_penilaian.php?id=<?php echo $row_n['Id_Karyawan']; ?>"><img src="images/edit.png" width="16" height="16" border="0"></a></div></td>
          <td><div align="center"><a href="hapus_penilaian.php?id=<?php echo $row_n['Id_Karyawan']; ?> "><img src="images/del.png" width="16" height="16" border="0" ></a></div></td>
      </tr>
      <?php } while ($row_n = mysql_fetch_assoc($n)); ?>
	 
    </table>
	 <tr>
    <td>&nbsp; <div align="center">Records <?php echo ($startRow_n + 1) ?> to <?php echo min($startRow_n + $maxRows_n, $totalRows_n) ?> of <?php echo $totalRows_n ?> </div></td>
  </tr>

        
            <div id="footer">
                <a href="karyawan.php">PT. Maretska Kirana Technologies</a> 2012.<br><br>
                Version 1.0
            </div>
        </div>
    </body>
</html>
<?php
mysql_free_result($n);
?>