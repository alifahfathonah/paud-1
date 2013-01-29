<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

$sql = "SELECT * FROM page_content WHERE id = '3'";
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
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Edit Sejarah</strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=update_history.php method="POST" name="formedit" id="formedit">
    <input name="page_id" type="hidden" value="<?php echo $row[0];?>">
      <table width="709" border="1" align="center">
          <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Title_tags</td>
          <td><input name="titletags" type="text" size="70" id="titletags" value="<?php echo $row[2];?>"></td>
        </tr>
        <tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Meta Keywords</td>
          <td width="530"><textarea name="metakey" rows=5 cols=35 id="metakey"><?php echo $row[3];?></textarea></td>
        </tr>
        <tr>
          <td height="35"><font size="3" face="Times New Roman, Times, serif" color="#000000">Meta Description</td>
          <td><textarea name="metadesc" rows=5 cols=35 id="metadesc"><?php echo $row[4];?></textarea></td>
        </tr>
        <tr>
          <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">URL</td>
          <td><input name="url" type="text" size="70" id="url" value="<?php echo $row[5];?>"></td>
        </tr>
	<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Title </td>
          <td> <input name="title" type="text" size="70" id="title" value="<?php echo $row[6];?>"></td>
        </tr>
	<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Summary</td>
          <td> <textarea name="sum" rows=5 cols=35 id="sum"><?php echo $row[7];?></textarea></td>
        </tr>
	<tr>
		 <td height="34"><font size="3" face="Times New Roman, Times, serif" color="#000000">Description</td>
          <td> <textarea name="descr" rows=5 cols=35 id="descr"><?php echo $row[8];?></textarea></td>
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