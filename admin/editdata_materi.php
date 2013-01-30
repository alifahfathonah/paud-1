<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

$sql = "SELECT * FROM materi WHERE id_materi = ".$_GET['id'];
$row=$database->query($sql);
//echo debug($row);
//$r = mysql_query($query_r, $koneksi) or die(mysql_error());
//$row = mysql_fetch_row($r);

?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->

<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Edit Bantuan</strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=update_materi.php method="POST" name="formedit" id="formedit" enctype="multipart/form-data">
    <input name="id_materi" type="hidden" value="<?php echo $row['id_materi'];?>">
      <table width="709" border="1" align="center">
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Kode Materi</td>
          <td><input name="kd_matakuliah" type="text" size="70" id="kd_matakuliah" value="<?php echo $row['kd_matakuliah'];?>"></td>
        </tr>
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Bab</td>
          <td><input name="bab_nama" type="text" size="70" id="bab_nama" value="<?php echo $row['bab_nama'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Judul</td>
          <td><input name="bab_judul" type="text" size="70" id="bab_judul" value="<?php echo $row['bab_judul'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Definisi</td>
          <td><textarea name="definisi" rows="5" id="definisi" cols="35"><?php echo $row['definisi'];?></textarea></td>
        </tr>
	<tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">File</td>
          <td width="530">
	    <input name="materi_file" type="file" >
	  </td>
        </tr>
	<tr>
          <td height="34">&nbsp;</td>
          <td><input type="submit" name="Submit" value="Edit">
            <input type="reset" name="Reset" value="Batal"></td>
        </tr>
      </table>
      
      <input type="hidden" name="MM_update" value="formedit">
    </form></td>
  </tr>
    </table>
	
<?php include ADMIN_FOLDER."/includes/footer.php" ?>