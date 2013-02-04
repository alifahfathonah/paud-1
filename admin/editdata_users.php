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
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box">
<table width="100%" height="106" border="0" align="center" cellpadding=3 cellspacing=1>
<tr >
    <td  height="25" colspan="8" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Edit User</strong></div><br></td>
  </tr>
<tr>
    <td class="style3">
    <form action=update_users.php method="POST" name="formedit" id="formedit" enctype="multipart/form-data">
    <input name="user_id" type="hidden" value="<?php echo $row['user_id'];?>">
      <table width="709" border="1" align="center">
        <tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Users</td>
          <td><input name="user_name" type="text" size="70" id="user_name" value="<?php echo $row['user_name'];?>"></td>
        </tr>
        <tr>
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Passwords</td>
          <td width="530">
	    <input name="user_pass" type="password" size="70" id="user_pass" value=""><br>
	    Tinggalkan kosong jika password tidak diganti 
	  </td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama Depan</td>
          <td><input name="first_name" type="text" size="70" id="first_name" value="<?php echo $row['first_name'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Nama Belakang</td>
          <td><input name="last_name" type="text" size="70" id="last_name" value="<?php echo $row['last_name'];?>"></td>
        </tr>
	<tr>
          <td height="32"><font size="3" face="Times New Roman, Times, serif" color="#000000">Jenis Kelamin</td>
          <td>
	    <input name="gender" type="radio" id="gender" value="m" <?php echo ($row['gender']=='m')?"checked":"" ?>> Laki-laki
	    <input name="gender" type="radio" id="gender" value="f" <?php echo ($row['gender']=='f')?"checked":"" ?>> Perempuan
	  </td>
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
          <td width="163" height="36"><font size="3" face="Times New Roman, Times, serif" color="#000000">Photo</td>
          <td width="530">
<?php    if($row[3]) {
	    echo "<img src='".IMG_ADDR."/users/".$row["photo"]."'><br>";
	 }   
?>    
	    <input type="hidden" name="photo" value="<?php echo $row["photo"]; ?>">
	    <input name="user_photo" type="file" >
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
		</div>	
<?php include ADMIN_FOLDER."/includes/footer.php" ?>