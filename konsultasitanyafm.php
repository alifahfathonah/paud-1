<?php
include 'config.php';
include ROOT."/includes/header.php";
$TxtPertanyaan=(!isset($TxtPertanyaan))?'':$TxtPertanyaan;
$TxtPenanya=(!isset($TxtPenanya))?'':$TxtPenanya;
?>
<div id="main">
	<div class="shell">
	  	<div class="box last-box">
<form action="konsultasitanyasim.php" method="post" name="form1" target="_self">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>KONSULTASI MATAKULIAH</b></td>
</tr>

<tr bgcolor="#DBEAF5"> 
  <td valign="top" bgcolor="#DBEAF5">Pertanyaan</td>
  <td bgcolor="#DBEAF5"> 
	<textarea name="TxtPertanyaan" cols="35" rows="3"><?php echo $TxtPertanyaan; ?></textarea>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Penanya</td>
  <td><input name="TxtPenanya" type="text" value="<?php echo $TxtPenanya; ?>" size="46" maxlength="100"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>&nbsp;</td>
  <td> 
	<input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
</form>
		</div>
<?php include ROOT."/includes/footer.php"; ?>
