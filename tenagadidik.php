<?php
include 'config.php';
include ROOT."/includes/header.php";
$sql="SELECT * FROM users where user_id>1";
$pendidik = $database->loadquery($sql);
?>
<!-- Main -->
<div id="main">
	<div class="shell">
	<div class="box last-box">
		<h3 align="center"><font align="center">Tenaga Pendidik</font></h3>
		<table style="width:100%;border:1px solid #000;" cellpadding=4 cellspacing=0>	
			<thead>
				<tr>
					<th style="width:5%;border:1px solid #000;font-size:14px;padding:4px;">No</th>
					<th style="border:1px solid #000;font-size:14px;padding:4px" colspan=2>Nama Pendidik</th>
					<th style="width:25%;border:1px solid #000;font-size:14px;padding:4px">Jenis Kelamin</th>
					<th style="width:50%;border:1px solid #000;font-size:14px;padding:4px">Alamat</th>
					<th style="width:50%;border:1px solid #000;font-size:14px;padding:4px">Telepon</th>
					<th style="border:1px solid #000;font-size:14px;padding:4px">Alamat Email</th>
				</tr>
			</thead>
			<tbody>
<?php if(count($pendidik)>0) {
	$no=1;
	foreach($pendidik as $p) {
		$photo=IMG_ADDR."/".((!$p["photo"])?'no_user.png':"users/".$p["photo"]);
		//echo debug($photo);
?>				
				<tr>
					<td style="border:1px solid #000;padding:4px;text-align: right;vertical-align: top">
						<?php echo $no; ?>		
					</td>
					<td style="width:15%;border:1px solid #000;padding:4px">
						<img src="<?php echo $photo; ?>" width="92">
					</td>
					<td style="width:30%;border:1px solid #000;padding:4px">
						<?php echo $p["first_name"]." ".$p["last_name"]; ?>
					</td>
					<td style="border:1px solid #000;padding:4px">
						<?php echo ($p["gender"]=='m')?'Laki-laki':'Perempuan'; ?>
					</td>
					<td style="border:1px solid #000;padding:4px">
						<?php echo $p['address'] ?>
					</td>
					<td style="border:1px solid #000;padding:4px">
						<?php echo $p['phone_number'] ?>
					</td>
					<td style="border:1px solid #000;padding:4px"> 
						<a href="mailto:<?php echo $p["email_addr"]; ?>"><?php echo $p["email_addr"]; ?></a>
					</td>
				</tr>
<?php		$no++;
	}
       }
       else {
	echo "<tr><td colspan='3' style='padding:4px' align='center'>Tidak ada</td></tr>";			
       }	
?>	
			</tbody>
		</table>
		
	</div>
</div>
<!-- /Main -->

    <br><br>
<?php include ROOT."/includes/footer.php"; ?>