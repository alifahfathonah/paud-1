<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

$sql = "SELECT * FROM kontak";
$row=$database->query($sql);
//echo debug($row);
//$r = mysql_query($query_r, $koneksi) or die(mysql_error());
//$row = mysql_fetch_row($r);

?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box">
<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Edit Kontak</strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=update_paul.php method="POST" name="formedit" id="formedit">
    <input name="id" type="hidden" value="<?php echo $row['id'];?>">
      <table width="709" border="1" align="center">
       <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama Depan</td>
          <td><input name="first_name" type="text" size="70" id="first_name" value="<?php echo $row['first_name'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama Belakang</td>
          <td><input name="last_name" type="text" size="70" id="last_name" value="<?php echo $row['last_name'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Alamat</td>
          <td><textarea name="address" rows="5" id="address" cols="35"><?php echo $row['address'];?></textarea></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Alamat E-mail</td>
          <td><input name="email_addr" type="text" size="70" id="email_addr" value="<?php echo $row['email_addr'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">No Telepon</td>
          <td><input name="phone_number" type="text" size="70" id="phone_number" value="<?php echo $row['phone_number'];?>"></td>
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
		</div>	
<?php include ADMIN_FOLDER."/includes/footer.php" ?>