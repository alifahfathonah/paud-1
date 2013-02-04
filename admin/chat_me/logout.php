<?	
	include('conn.php');
	
	$q1="select * from user";
	$h1=mysql_query($q1);
	$r=mysql_fetch_array($h1);
	$q=mysql_query("update user set status='off' where username='$r[username]' and password='$r[password]'");
	
	session_start();
	
	session_unset();
	
	session_destroy();
	
	header('location:http://localhost/chat_me');
?>