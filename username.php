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
	
		<h3 align="center"><font align="center">User Name</font></h3>
  <br><h3 align="center">Paud Nur Rahma Tanjung</h3>
<br>
	<div>
    <h1>Daftar</h1>
        <form enctype="multipart/form-data" action="?page=upload" method="post">
        <table class="datatable" align="center">
        <tr>
            <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Nama</p></font></td>
            <td><input type="text" name="nama" size="30"/></td>
        </tr>
        
        <tr>
            <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Username</p></font></td>
            <td><input type="text" name="username" size="30"/></td>
        </tr>
        
        <tr>
            <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Password</p></font></td>
            <td><input type="password" name="password" size="30"/></td>
        </tr>
        
        <tr>
            <td width="29%" height="37" valign="middle"><font size="2" face="verdana"><p>Photo</p></font></td>
            <td><input type="file" name="gambar" size="30" id="gambar" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td width="71%"><input name="submit" type="submit" value="Submit" />&nbsp;</td>
        </tr>
        </table>
        </form>
    
</div>




	
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