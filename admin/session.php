<?php
    session_start();
    
    include "../connection/koneksi.php";

    if(!isset($_SESSION['username']))
    {
        header('Location: index.php');
    }
?>

