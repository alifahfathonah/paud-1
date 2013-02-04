<?
	session_start();
	include "../../config.php";
	$date = date('Ymd');
	$q=$database->execsql("insert into chat_me(username, message, date)values('$_SESSION[username]', '$_POST[text]', '$date')");
?>