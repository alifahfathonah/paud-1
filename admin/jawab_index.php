<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}
include  ADMIN_FOLDER."/includes/header.php"; ?>
<div id="main">
	<div class="shell">
	  	<div class="box last-box">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
  <tr align="right" bgcolor="#22B5DD"> 
    <td colspan="2">[ <a href="<?php echo ADMIN_ADDR."/tampil_jawab.php" ?>" target="_self">Tampil Semua</a>]</td>
  </tr>
  <?php 
	$tampil= (!isset($_GET['tampil']))?'all':$_GET['tampil'];
	if($tampil!='all')
	{
	$sql = "SELECT  * 
			FROM konsultasi_tanya
			WHERE id_tanya 
				  NOT IN(SELECT id_tanya FROM konsultasi_jawab)
			GROUP BY  id_tanya";
	}
	else
	{
	$sql = "SELECT * FROM konsultasi_tanya";
	}
	$qry = $database->loadquery($sql);
	if($qry) {
	    $no=0;
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
  <tr bgcolor="#DBEAF5"> 
    <td valign="top"><b>Jawaban</b></td>
    <td bgcolor="#DBEAF5"><a href="./konsultasijawabfm.php?idtanya=<?php echo $data['id_tanya']; ?>">
     Jawab Pertanyaan ini</a></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php
    }
  }
  ?>
  
</table>
	</div>
<?php include ADMIN_FOLDER."/includes/footer.php"; ?>