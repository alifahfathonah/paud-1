<?		
	include('conn.php');
	
	if(isset($_POST['login'])){
	$q="select * from users where user_name='".$_POST['username']."'";
	$h=mysql_query($q);
	$r=mysql_fetch_array($h);
		
		if($r['user_pass'] == sha1($_POST['password'])){
			
			$q2="update user set status='on' where user_name='$_POST[username]' and user_pass='$r[password]'";
			$h2=mysql_query($q2);
			session_start();
			session_register('username');
			$_SESSION['username'] = $r['username'];
			header('location:chat.php');
		}else{
			echo "failed";
		}
	
	}
?>
<form method=post action="index.php">
username :<input type=text name=username><br>
password :<input type=password name=password><br>
<input type=submit name='login' value=login>
</form>