<?
	session_start();
	include "../../config.php";
	if($_SESSION['username'] == ""){
		header('location:'.ADMIN_ADDR.'/chat_me/chat_me');
	}
?>
<html>
<head>
<title>Chat sederhana ajax</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<script type='text/javascript' src='<?php echo JS_ADDR.'/jquery-1.4.2.min.js' ?>'></script>
</head>
<body>
<div id='wrapper'>
	<div id='menu'>
		<p class='welcome'>Welcome <?php echo $_SESSION['username'];?></p>
		<p class='logout'><a href="<?php echo ADMIN_ADDR."/logout.php" ?>">Logout</a></p>
		<div style="clear:both"></div>
	</div>
	<div id='online'>
		<?include('user-online.php');?>
	</div>
	<div id='chatbox'>
	<?include('message-line.php');?>
	</div>
	<form name='message' action="">
	<p><input type=text name='message-input' id='message-input' /></p>
	<p><input type=submit name='message-submit' id='message-submit' value=send /></p>
	</form>
	<div id='footer'>Chat sederhana</div>
</div>
<!--ajax dimulai dari sini-->
<script language='javascript'>
//membuat document jquery
$(document).ready(function(){
	//variable yg dibaca dengan ajax untuk di kirim
	$("#message-submit").click(function(){
		var clientmsg = $("#message-input").val();
		$.post("post-message.php", {text: clientmsg});
		$("#message-input").attr("value", "");
		return false;
	});
	//load ajax message
	function loadLog(){
		var oldscrolHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url : "message-line.php",
			cache : false,
			success : function(html){
				$("#chatbox").html(html); //load ke <div chatbox>
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
				}
			},
		});
	}
	function loadlog(){
		var oldscrolHeight = $("#online").attr("scrollHeight") - 20;
		$.ajax({
			url : "user-online.php",
			cache : false,
			success : function(html){
				$("#online").html(html); //load ke <div chatbox>
				var newscrollHeight = $("#online").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#online").animate({scrollTop: newscrollHeight}, 'normal'); //scrol otomatisnya
				}
			},
		});
	}
	
	setInterval (loadLog, 1000);
	setInterval (loadlog, 1000);
});
</script>
</body>
</html>