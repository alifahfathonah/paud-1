<?php
include 'config.php';
include ROOT."/includes/header.php"; ?>

<!-- Main -->
<div id="main">
	<div class="shell">
		<!-- Box -->
		
		<!-- /Box -->
		
		<!-- Box -->
		<div class="box">
			
			<div class="box-image">
				
			</div>
				
			
		
		</div>
		<!-- /Box -->
		
		<!-- Box -->
	
		<h3 align="center"><font align="center">Biodata Pendidik</font></h3>
  <br><h3 align="center">Paud Nur Rahma Tanjung</h3>
<br>
		<table width="350" border="0" cellpadding="2" cellspacing="1" align="center" >

    <tr> 
      <td width="116" align="left" class="login">User ID</td>
      <td width="8" align="left" class="login">:</td>
      <td width="210"><input name="TxtUid" type="text" value="<?php echo $TxtUid; ?>" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="left" class="login">Password</td>
      <td align="left" class="login">:</td>
      <td><input name="TxtPass" type="password" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="left" class="login">Ulangi Password</td>
      <td align="left" class="login">:</td>
      <td><input name="TxtPass2" type="password" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td align="left" class="login">Nama Depan </td>
      <td align="left" class="login">:</td>
      <td><input name="TxtNamaA" type="text" value="<?php echo $TxtNamaA; ?>" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="left" class="login">Nama Belakang </td>
      <td align="left" class="login">:</td>
      <td><input name="TxtNamaB" type="text" value="<?php echo $TxtNamaB; ?>" size="35" maxlength="30"></td>
    </tr>
    <tr> 
      <td align="left" class="login">Kelamin</td>
      <td align="left" class="login">:</td>
      <td class="login"><input name="RbKelamin" type="radio" value="P" checked>
        Pria 
        <input type="radio" name="RbKelamin" value="W">
        Wanita</td> 
    </tr>
    <tr> 
      <td align="left" class="login">Alamat</td>
      <td align="left" class="login">:</td>
      <td><textarea name="TxtAlamat" cols="25" rows="2"><?php echo $TxtAlamat; ?>
      </textarea></td>
    </tr>
    <tr> 
      <td align="left" class="login">E-Mail</td>
      <td align="left" class="login">:</td>
      <td><input name="TxtEmail" type="text" value="<?php echo $TxtEmail; ?>" size="35" maxlength="60"></td>
    </tr>
    <tr> 
      <td align="left" class="login">Telpon</td>
      <td align="left" class="login">:</td>
      <td><input name="TxtTelpon" type="text" value="<?php echo $TxtTelpon; ?>" size="35" maxlength="15"></td>
    </tr>
    <tr>
      <td align="left" class="login"><p>Profil<img src="images/login.png" width="82" height="79" longdesc="images/login.png" /></p>        </td>
         <td align="left" class="login">:</td>
          <td>   <textarea name="TxtProfil"" cols="25" rows="5" id="TxtProfil"><?php echo $TxtProfil; ?>
           </textarea>
            </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="2" align="right"><p>&nbsp;
        </p>
        <p>
          <input type="submit" name="Submit" value="Daftar Sekarang">
        </p></td>
    </tr>
  </table>


	
			<div align="center">
			  <!-- <div class="buttons">
				<a href="#"><span>Read More</span></a>-->
	          </div>
	  </div>
		</div>
		<!-- /Box -->
		<div class="cl">&nbsp;</div>
	</div>
</div>
<!-- /Main -->

<?php include ROOT."/includes/footer.php"; ?>