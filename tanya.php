<?php
include 'config.php';
include ROOT."/includes/header.php"; 
$kdmakul = (!isset($_GET['kdmakul']))?'':$_GET['kdmakul'];
?>
<!-- Main -->
<div id="main">
	<div class="shell">
	  	<div class="box last-box">
<form name="form1" method="GET" action="">
<table width="500" border="0" align="center" cellpadding="2" cellspacing="1">
<tr align="right" bgcolor="#22B5DD">
  <td height="54" colspan="2" align="center"><B>[ SISTEM TANYA JAWAB MATA PELAJARAN ] </B></td>
</tr>
<tr align="right" bgcolor="#22B5DD"> 
  <td colspan="2">[ <a href="<?php echo URL_ADDR."/konsultasitanyafm.php" ?>" target="_self">Tanya Lagi</a> 
	]</td>
</tr>

<?php 

//echo "$_GET[kdmakul]";
//$kdmakul=(!isset($_GET[kdmakul]))?'':$_GET[kdmakul];
$sql = "SELECT * FROM konsultasi_tanya ORDER BY id_tanya";
//if ($kdmakul=='0')
//{
//  $sql = "SELECT * FROM konsultasi_tanya ORDER BY id_tanya";
//}
//else{
//		$sql = "SELECT * FROM konsultasi_tanya
//		WHERE kd_matakuliah='$kdmakul'
//		ORDER BY id_tanya";
//		
//}
$qry = $database->loadquery($sql);
$no=1;
foreach ($qry as $data) {
  $no++;
?>
<tr bgcolor="#DBEAF5"> 
  <td> <b>Pertanyaan</b></td>
  <td> <?php echo $data['pertanyaan']; 
	      echo " <b>[ ".$data['penanya']." ]</b>"; ?>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td> <b>Jawaban</b></td>
  <td> <?php 
  		 $sql2 = "SELECT * FROM konsultasi_jawab
		WHERE id_tanya='$data[id_tanya]'
		ORDER BY id_tanya";
		$qry2 = $database->loadquery($sql2);
		foreach ($qry2 as $data_penjawab) {
		  echo $data_penjawab['jawaban']; 
	      echo " <b>[ ".$data_penjawab['penjawab']." ]</b><br>";
		  } ?>
  </td>
</tr>
<tr> 
  <td colspan="2">&nbsp;</td>
</tr>
<?php
 }
?>
<tr>
  <td colspan="2" bgcolor="#DBEAF5">&nbsp;</td>
</tr>
</table>
</form>
		</div>
<?php include ROOT."/includes/footer.php"; ?>
