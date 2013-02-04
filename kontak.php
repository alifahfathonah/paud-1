<?php
include 'config.php';
include ROOT."/includes/header.php";
//history
$sql="SELECT * FROM kontak";
$me=$database->query($sql);

?>

<!-- Main -->
<div id="main">
	<div class="shell">
		<!-- Box -->
		
		<!-- /Box -->
		
		<!-- Box -->
		<!--<div class="box">
			<h3><marquee  bgcolor="yellow">Paud Nur Rahma Tanjung</marquee></h3>
			<div class="box-image">
				<a href="#"><img height="290" width="980"src="css/images/tampilan utama.jpg" alt="" /></a>
			</div>
				<p><strong> Pendidikan anak usia dini (PAUD) adalah jenjang pendidikan sebelum jenjang pendidikan dasar yang merupakan suatu upaya pembinaan yang ditunjukan bagi anak sejak lahir sampai dengan usia enam tahun yang dilakukan melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut, yang diselenggarakan pada jalur formal, nonformal, dan informal.</strong></p>
			
			
		
		</div>-->
		<!-- /Box -->
		
		<!-- Box -->
		<div class="box last-box">
		<h3 align="center"><font align="center">Kontak</font></h3>
  <br><h3 align="center">Paud Nur Rahma Tanjung</h3>
<br>
<table style='width:100%'>
	<tbody>
		<tr>
			<td style="padding:5px;width:100px">Nama Lengkap</td>
			<td style="padding:5px;width:5px">:</td>
			<td style="padding:5px;"><?php echo $me['first_name']." ".$me['last_name'] ?></td>
		</tr>
		<tr>
			<td style="padding:5px;">Alamat</td>
			<td style="padding:5px;">:</td>
			<td style="padding:5px;"><?php echo $me['address'] ?></td>
		</tr>
		<tr>
			<td style="padding:5px;">Alamat Email</td>
			<td style="padding:5px;">:</td>
			<td style="padding:5px;"><?php echo $me['email_addr'] ?></td>
		</tr>
		<tr>
			<td style="padding:5px;">No Telepon</td>
			<td style="padding:5px;">:</td>
			<td style="padding:5px;"><?php echo $me['phone_number'] ?></td>
		</tr>
	</tbody>
</table>
			<!-- <div class="buttons">
				<a href="#"><span>Read More</span></a>-->
			</div>
		</div>
		<!-- /Box -->
		<div class="cl">&nbsp;</div>
	</div>
</div>
<!-- /Main -->

<?php include ROOT."/includes/footer.php"; ?>