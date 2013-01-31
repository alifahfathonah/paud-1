<?PHP
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "12369874"; 
	$db_data = "eLearningjava";
	
	$koneksi = mysql_connect($db_host, $db_user, $db_pass)
				or die ("Koneksi gagal".mysql_error());
	mysql_select_db($db_data, $koneksi) 
		or die ("Baca DB gagal".mysql_error());
?>