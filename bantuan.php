<?php
include 'config.php';
include ROOT."/includes/header.php";
//help
$sql="SELECT * FROM page_content WHERE id=4";
$help=$database->query($sql);
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
		<h3 align="center"><font align="center">Halaman Bantuan</font></h3>
  <br><h3 align="center">Paud Nur Rahma Tanjung</h3>
<br>
<?php echo $help['descr']; ?>
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