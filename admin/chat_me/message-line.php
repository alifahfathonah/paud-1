<?
	include "../../config.php";
	$date = date('Ymd');
	$q=$database->loadquery('select * from chat_me where date='.$date.' order by id desc');
	foreach($q as $r){
		echo "<div class='message-line'>$r[username] : $r[message]</div>";
	}
	
?>
