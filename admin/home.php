<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";
?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!-- Main -->
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box">

	    <table width="930" align="center" class='list'>
	      <thead>
		  <td class='center' colspan=5><center><font face="Times New Roman" size="5" color="black">Control Panel</font></center></td></thead>
		  <tr>
		    <td width=120 align=center><a href="home.php"><br><br><img src=images/themes64.png border=none><br /><b>Menu Utama</b></a></td>
		    <td width=120 align=center><a href="editdata_visi.php"><br><br><img src=images/modul.png border=none><br /><b>Visi</b></a></td>
		    <td width=120 align=center><a href="editdata_misi.php"><br><br><img src=images/organization64.png border=none><br /><b>Misi</b></a></td>
		    <td width=120 align=center><a href="editdata_history.php"><br><br><img src=images/berita.png border=none><br /><b>Sejarah Singkat</b></a></td>
		    <td width=120 align=center><a href="tampil_jawab.php"><br><br><img src=images/download.png border=none><br /><b>Soal</b></a></td>
		</tr>
		  <tr>
		    <td width=120 align=center><a href="tampildata_materi.php"><br><br><img src=images/hubungi.png border=none><br /><b>Materi</b></a></td>
		    <td width=120 align=center><a href="tampildata_users.php"><br><br><img src=images/galeri.png border=none><br /><b>User Name</b></a></td>
		    <td width=120 align=center><a href="editdata_help.php"><br><br><img src=images/poling.png border=none><br /><b>Bantuan</b></a></td>
		    <td width=120 align=center><a href="<?php echo ADMIN_ADDR.'/logout.php' ?>"><br><br><img src=images/analysis64.png border=none><br />
		       <strong>Logout </strong>
		     </a></td>
		    
      </tr><tr>
		    <td width=120 align=center></td>
		    <td width=120 align=center></td>
		    <td width=120 align=center></td>
		    <td width=120 align=center></td>
		     <td width=120 align=center></td>
		   
      </tr>
      </table>
		</div>	    
<?php include ADMIN_FOLDER."/includes/footer.php"; ?>          
