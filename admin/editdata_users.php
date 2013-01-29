<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

$sql = "SELECT * FROM users WHERE user_id = ".$_GET['id'];
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
    <form action=update_users.php method="POST" name="formedit" id="formedit">
    <input name="user_id" type="hidden" value="<?php echo $row[0];?>">
      <table width="709" border="1" align="center">
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Users</td>
          <td><input name="user_name" type="text" size="70" id="titletags" value="<?php echo $row[1];?>"></td>
        </tr>
        <tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Passwords</td>
          <td width="530"><input name="user_pass" type="password" size="70" id="user_pass" value=""></td>
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