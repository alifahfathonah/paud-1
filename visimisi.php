<?php
include 'config.php';
include ROOT."/includes/header.php";
//visi
$sql="SELECT * FROM page_content WHERE page_type='visi'";
$visi=$database->query($sql);
$sql="SELECT * FROM page_content WHERE page_type='misi'";
$misi=$database->query($sql);
?>


<!-- Main -->
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box1">
		<h3>VISI</h3><br>
<?php echo $visi['sum']; ?>	
		</div>
		<!-- /Box -->
		
		<!-- Box -->
		<div class="box1">
			<h3><marquee  bgcolor="yellow">Paud Nur Rahma Tanjung</marquee></h3>
			<div class="box-image">
				<a href="#"><img height="290" width="280"src="css/images/tampilan utama.jpg" alt="" /></a>
			</div>
				<p><strong> Pendidikan anak usia dini (PAUD) adalah jenjang pendidikan sebelum jenjang pendidikan dasar yang merupakan suatu upaya pembinaan yang ditunjukan bagi anak sejak lahir sampai dengan usia enam tahun yang dilakukan melalui pemberian rangsangan pendidikan untuk membantu pertumbuhan dan perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut, yang diselenggarakan pada jalur formal, nonformal, dan informal.</strong></p>
			
			
		
		</div>
		<!-- /Box -->
		
		<!-- Box -->
		<div class="box1 last-box">
		<h3><font align="center">MISI </font></h3>
		<!--<br><h3>Paud Nur Rahma Tanjung</h3><br>
				<p><strong>  Paud adalah pendidikan usua dini yang dapat membuat anak2 semakin bisa berkreasi dengan kemampuan yang dimilikinya</strong></p>
			
			
			<div class="entry">
				<div class="blog-posts">
					<ul>
					    <li>
					    	<h5><a href="#">Tempat Bermain</a></h5>
					    	<p>Mampu menyelenggarakan kegiatan yang memicu pertumbuh-kembangan peserta didik sebagai pribadi yang utuh, yang meliputi kemampuan berikut; (a) merancang kegiatan, (b) mengimplementasikan kegiatan, (c) menilai proses dan hasil kegiatan, (d) melakukan perbaikan secara berkelanjutan berdasarkan hasil penilaian terhadap proses dan hasil kegiatan yang memicu perkembangan peserta didik</p>
					      </li>
					    <li class="last">
					    	<h5><a href="#">Tempat Belajar</a></h5>
					    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor conceset ornare adip. Curabitur aliquet, enim vel.</p>
					    </li>
					</ul>
				</div>
			</div>-->
			<?php echo $misi['sum']; ?>
			
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