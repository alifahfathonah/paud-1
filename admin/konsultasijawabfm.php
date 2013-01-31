<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}
include  ADMIN_FOLDER."/includes/header.php"; 

# Baca variabel URL (If Register Global ON)
$idtanya = $_GET['idtanya'];

$TxtJawaban=(!isset($TxtJawaban))?'':$TxtJawaban;
$TxtPenjawab=(!isset($TxtPenjawab))?'':$TxtPenjawab;

# Penyimpanan
$sql = "SELECT * FROM konsultasi_tanya WHERE id_tanya='$idtanya'";
$data = $database->query($sql);

?>

<form action="konsultasijawabsim.php" method="post" name="form1" target="_self">
<table width="450" border="0" cellspacing="1" cellpadding="2">
<tr bgcolor="#77B6D0"> 
  <td colspan="2"><b>HALAMAN UNTUK MENJAWAB</b></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td width="83">Pertanyaan</td>
  <td width="356"> 
    <?php echo $data['pertanyaan']; ?>
	<input name="TxtIdTanya" type="hidden" value="<?php echo $data['id_tanya']; ?>">
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Jawaban</td>
  <td bgcolor="#DBEAF5"> 
	<textarea name="TxtJawaban" cols="35" rows="3"><?php echo $TxtJawaban; ?></textarea>
  </td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td valign="top">Penjawab</td>
  <td><input name="TxtPenjawab" type="text" value="<?php echo $TxtPenjawab; ?>" size="46" maxlength="100"></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td>&nbsp;</td>
  <td> 
	<input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
</form>
<?php include ADMIN_FOLDER."/includes/footer.php" ?>