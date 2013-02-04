<?php
    session_start();
    require_once "../config.php";
    $query  = "SELECT * FROM `users` WHERE user_name='".$_POST["user_name"]."' AND user_pass='".sha1($_POST["user_pass"])."' ";
    $r=$database->loadquery($query);
    //echo debug($r[0]['user_name']);
    //exit();
    if (isset($r[0]['user_name'])){
        $_SESSION['username']=$_POST["user_name"];
        $q2="update users set status='on' where user_name='$_POST[user_name]'";
	$h2=$database->execsql($q2);
        header('Location: home.php');

    }else{
?>
        <script type="text/javascript">
            alert ("Username or password or account has been disabled");
            document.location='<?php echo ADMIN_ADDR."/index.php"; ?>'; 
        </script>
    <?php
    }

?>