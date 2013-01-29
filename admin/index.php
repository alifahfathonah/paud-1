<?php require_once "../config.php" ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_ADDR."/admin/style.css" ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_ADDR."/admin/jquery-ui-1.8.7.custom.css" ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_ADDR."/admin/smoothness/jquery-ui-1.8.13.custom.css" ?>" />   
        <script type="text/javascript" src="<?php echo JS_ADDR."/jquery-1.4.2.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo JS_ADDR."/jquery-ui-1.8.7.custom.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo JS_ADDR."/jquery-ui-1.8.13.custom.min.js" ?>"></script>
        <script type="text/javascript">
        function login(){
                var loginForm = document.getElementById("frmLogin");
                if (loginForm.txtUsername.value==""){
                    alert ("Anda harus mengisi username terlebih dahulu...");
                    return false;
                }
                if (loginForm.txtPassword.value==""){
                    alert("Anda harus mengisi password terlebih dahulu...");
                    return false;
                }  
            }
        </script>
        <style type="text/css">
<!--
.style1 {color: #000000}
-->
        </style>
</head>
    <body>
        <div id="container"><br>
            <div id="header">
			
              <p align="center">&nbsp;</p>
              <p align="center">Paud Nur Rahma Tanjung</p>
              <p align="center">Login Tenaga Pendidik</p>
            </div>
            <div align="right"><a href="<?php echo ADMIN_ADDR."/index.php" ?>" class="style1">Kembali Ke Home</a>            </div>
            <div id="content">
                <div class="box" style="width: 325px; min-height: 350px; margin-top: 40px; margin-left: auto; margin-right: auto;">
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="heading">
                      	<h1 style="background-image:url('<?php echo IMG_ADDR."/admin/box_top.png" ?>');">Masukan User Name Dan Password </h1>
                    </div>
                    <div class="content" style="min-height: 150px">
                        <form id="frmLogin" action="<?php echo ADMIN_ADDR."/proses_login.php" ?>" method="post" class="expose">
			<table style="width: 100% ">
                            <tr>
                                <td width="44%" rowspan="4" style="text-align: left;"><img src="<?php echo IMG_ADDR."/admin/login.png"; ?>" 
                                alt="Please enter your login details."></td>
                            </tr>
                            
                           
                            <tr style="font-family: tahoma; font-size: 12px">
                                <td width="56%">Username:<br>
                                    <input type="text" name="user_name" id="txtUsername"  autocomplete="off">
                                    <br><br>
                                    Password:<br>
                                    <input type="password" name="user_pass" id="userPassword"  autocomplete="off">
                                    <br><br>
                                    <button id="btnLogin" name="btnLogin" class="ui-state-default ui-corner-all" onClick="login();"
                                    style="height: 30px; width: 75px;
                                     cursor: pointer;"> Login </button>
                                </td>
                            </tr>
                            
                        </table>
			</form>
                    </div>
                </div>
            </div>
            <div id="footer">
                Arif Susanto,S.Kom (c) 2012.<br>
                        
            </div>
        </div>
    </body>
</html>
