user online
<?
	include "../../config.php";
	$q1="select * from users where status='on'";
	$h1=$database->loadquery($q1);
	foreach($h1 as $row){
		echo "<div class=user-online>$row[user_name]</div>";
	}
?>