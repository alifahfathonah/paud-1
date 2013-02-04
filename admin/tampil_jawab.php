<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

?>
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr align="right" bgcolor="#22B5DD"> 
    <td colspan="2">[ <a href="<?php echo ADMIN_ADDR."/jawab_index.php?admin=jawab" ?>" target="_self">Pertanyaan</a> ]</td>
  </tr>
  <?php 
    
	$sql = "SELECT konsultasi_tanya.*,konsultasi_jawab.* 
			FROM konsultasi_tanya,konsultasi_jawab 
			WHERE konsultasi_tanya.id_tanya=konsultasi_jawab.id_jawab
			ORDER BY konsultasi_tanya.id_tanya";
	$qry = $database->loadquery($sql);
	//echo debug($qry); 
	$no=1;
	foreach($qry as $data) {
	  $no++;
  ?>
  <tr> 
    <td width="112"><b>Pertanyaan</b></td>
    <td width="677"> 
	<?php echo $data['pertanyaan']; 
	   echo " <b>[ ".$data['penanya']." ]</b>";
	?>
	</td>
  </tr>
  <tr> 
    <td valign="top"><b>Jawaban</b></td>
    <td><?php echo $data['jawaban']; 
	       echo " <b>[ ".$data['penjawab']." ]</b>";
		?>
	</td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php
  }
  ?>
</table>
		</div>
<?php include ADMIN_FOLDER."/includes/footer.php" ?>