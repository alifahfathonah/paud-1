<?php
session_start();
    
require_once("../config.php");

if(!isset($_SESSION['username']))
{
    header('Location: index.php');	
}

include  ADMIN_FOLDER."/includes/header.php";

/*
Terimakasih telah mendownload tutorial ini.
Silahkan tuliskan pertanyaan atau komentar anda pada http://www.media-kreatif.com
Kirimkan request anda seputar pemrograman php pada  http://media-kreatif.com/request-tutorial.prm
*/
include_once("../config.php"); //panggil script koneksi
//include_once("ClassPaging.php"); //Panggil classPaging

//buat batas berita yang akan ditampilkan dalam setiap halaman
//$limit = 10; 
//$offset=(!isset($_GET['offset']))?0:$_GET['offset'];

//buat query
//$query = new CnnNav($limit,'page_content','*','id');

//jalankan querynya
//$result = $query ->getResult();
//echo debug($result);
//perintah diatas sama dengan perintah mysql_query

//$name= (!isset($_POST['name'])?'':$_POST['name']); //get the nama value from form
//$q = "SELECT * from page_content where title like '%$name' or title like '%$name%'"; //query to get the search result
//$result = mysql_query($q); //execute the query $q
//echo debug(mysql_error());
$sql="SELECT * FROM peserta";
$r=$database->loadquery($sql);

?>
<style>
	table{
		border:silver 1px solid;
	}
	table td{
		border-bottom:silver 1px solid;
		border-right:silver 1px solid;
		padding:0 0 0 5px;
	}
</style>
<script>
    function delaction(a) {
	if(confirm('Apakah Anda yakin hapus?')) {
	    location.href='<?php echo ADMIN_ADDR."/hapus_peserta.php?id=" ?>'+a;    
	}
	
    }
</script>
<div id="main">
	<div class="shell">
		<!-- Box -->
		<div class="box">
<table width="938" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr >
    <td  height="25" colspan="6" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><br><div align="center"><strong>Tabel Peserta </strong></div><br></td>
  </tr>
  <tr> 
    <td height="25" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>ID</strong></div></td>
    <td width="214" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>Nama</strong></div></td>
    <td width="214" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>Jenis Kelamin</strong></div></td>
    <td width="230" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>Tanggal dibuat</strong></div></td>
    <td width="100" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><div align="center"><strong>Aksi</strong></div></td>
  </tr>
<?php
//membuat penomoran posting
//$nomor = ($limit * $offset)+1; 
foreach($r as $data)
{
?>
  <tr bgcolor="#FFFFFF">
    <td width="99" height="20" align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['id']; ?></td>
    <td height="50" align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['first_name']." ".$data['last_name']; ?></td>
    <td height="50" align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo ($data['gender']=="m")?"laki-laki":"perempuan"; ?></td>
    <td align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><?php echo $data['createddate']; ?></td>
    <td align="center" valign="middle"><font size="3" face="Times New Roman, Times, serif" color="#000000"><a href='<?php echo ADMIN_ADDR."/editdata_peserta.php?id=".$data['id'] ?>'>Edit</a> | <a href="#" onclick="delaction('<?php echo $data['id']?>')">Delete</a></td>    
  </tr>
<?php
//$nomor++;
}
?>
  <tr>
    <td height="25" colspan="6" align="center" valign="bottom">
		<p><a href="<?php echo ADMIN_ADDR."/tambah_peserta.php" ?>">Tambah Peserta</a> </p>
		<p><b>
		  <?php 
			//$query->printNav(); //Cetak paging
		?>
		</p></b>
	  </td>
  </tr>
</table>
		</div>
<?php include ADMIN_FOLDER."/includes/footer.php" ?>
