<?php
    session_start();
    include "../config.php";
    $u=$_SESSION['user_name'];
    $q2="update users set status='off' where user_name='$u'";
    $h2=$database->execsql($q2);
    unset($_SESSION['user_name']);
    session_destroy();
    header('Location: index.php');
?>
