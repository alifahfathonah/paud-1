<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

//echo debug($row);
//$r = mysql_query($query_r, $koneksi) or die(mysql_error());
//$row = mysql_fetch_row($r);
$username="";
?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->

<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Tambah Users</strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=proses_user.php method="POST" name="formadd" id="formadd" enctype="multipart/form-data">
      <table width="709" border="1" align="center">
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">User Name</td>
          <td><input name="user_name" type="text" size="70" id="user_name" value="<?php echo $username;?>"></td>
        </tr>
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Password</td>
          <td><input name="user_pass" type="password" size="70" id="password" value=""></td>
        </tr>
	<tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Photo</td>
          <td width="530">
	    <input name="user_photo" type="file" >
	  </td>
        </tr>
		 <tr>
          <td height="34">&nbsp;</td>
          <td><input type="submit" name="Submit" value="tambah">
            <input type="reset" name="Reset" value="Batal"></td>
        </tr>
      </table>
      
      <input type="hidden" name="MM_update" value="formedit">
    </form></td>
  </tr>
    </table>
	
<?php include ADMIN_FOLDER."/includes/footer.php" ?>