<?php
    session_start();
    include '../connection/koneksi.php';
    $query  = "SELECT * FROM `user` WHERE username='$_POST[txtUsername]' AND password='$_POST[txtPassword]'";
    $result = mysql_query($query);
    
    $num=mysql_num_rows($result);
    if ($num!=0){
         $_SESSION['username']=$_POST["txtUsername"];
        header('Location: home.php');

    }else{
    ?>
        <script type="text/javascript">
            document.location="index.php";
			alert ("Username or password or account has been disabled");
        </script>
    <?php
    }

?>