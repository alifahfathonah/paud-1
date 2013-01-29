<?php
session_start();
    
    include "../connection/koneksi.php";

    if(!isset($_SESSION['username']))
    {
        header('Location: index.php');	
    }
?>

<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Page</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/smoothness/jquery-ui-1.8.13.custom.css"/> 
          
        <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.8.7.custom.min.js"></script>
        <script type="text/javascript" src="stylesheet/jquery-ui-1.8.13.custom.min.js"></script>
        <style type="text/css">
            body { font-size: 12px; }
            label { position: absolute; text-align:right; width:130px; margin: 0 0 5px 0;}
            input, textarea, select { margin: 0 0 5px 140px; }
            fieldset { padding:0; border:0; margin-top:25px; }
            button {cursor: pointer}
        </style>

       <script type="text/javascript">
            $(function(){
                //Memberikan perintah pada event klik tombol Add User
                $("#btnAddUser").click(function(){
                    clearText();
                    $("#ui-dialog-title-frmAddUser").text('Add New User');
                    $("#frmAddUser").dialog("open");
                })

                //Memberikan perintah pada event klik tombol refresh
                $("#btnRefreshList").click(function(){
                    refreshUser();
                })

                //Membuat dialog form Add User 
                $("#frmAddUser").dialog({
                    autoOpen: false,
                    width: 500,
                    height: 400,
                    modal: true,
                    buttons:{
                        //Perintah tombol Save pada form Add User
                        "Save": function(){
                                var parameter = "action=" + $("#ui-dialog-title-frmAddUser").text() +
                                "&xID=" + $("#txtxID").val() +
                                "&Username=" + $("#txtUsername").val() +
                                "&Password=" + $("#txtPassword").val() +
                                "&Status=" + $("#optStatus").val();
								
								$("#frmAddUser").dialog("close");
                                $.ajax({
                                    type: "POST",
                                    cache: "false",
                                    datatype: "html",
                                    url: "proses_user.php",
                                    data: parameter,
                                    success: function(result){
                                        alert(result);
                                        refreshUser();
                                        clearText();

                                        if ($("#ui-dialog-title-frmAddUser").text()=='Edit Current User'){
                                            $("#frmAddUser").dialog("close");
                                        }
                                    }
                                });

                        },

                        //Perintah tombol Cancel pada form Add User
                        "Cancel": function(){
                            $(this).dialog("close");
                        }
                    }
                })
            })

            //Fungsi untuk melakukan pengambilan data user
            function refreshUser(){
                $.ajax({
                   type: "POST",
                   cache: "false",
                   url: "proses_user.php",
                   data: "action=refreshUser",
                   success: function(Data){
                       $("#ListUser tbody tr").remove();
                       $("#ListUser tbody").append(Data);
                   }
                });
            }

            //Fungsi Edit Current Record
            function editUser(UserID){
                $td = $("#" + UserID + " td:first-child");
                $("#txtxID").val($td.text());

                $td = $td.next();
                $("#txtUsername").val($td.text());

                $td = $td.next();
                $("#txtPassword").val($td.text());

                $td = $td.next();
                $("#optStatus").val($td.text());


                $("#ui-dialog-title-frmAddUser").text('Edit Current User');
                $("#frmAddUser").dialog("open");
            }

            //Fungsi untuk melakukan delete record user
            function deleteCurrUser(UserID){
                if (confirm("Apakah anda yakin menghapus user ini ?")){
                   $.ajax({
                       type: "POST",
                       cache: "false",
                       datatype: "html",
                       url: "proses_user.php",
                       data: "action=deleteUser&xID=" + UserID,
                       success: function(result){
                           alert (result);
                           refreshUser();
                       }
                   });
                }
            }

            //Fungsi untuk membersihkan form user
            function clearText(){
                $("#txtxID").val("");
                $("#txtUsername").val("");
                $("#txtPassword").val("");
                $("#optStatus").val("Disabled");
            }
			 
        </script>
    </head>
    
    <body onLoad="refreshUser();">
        <div id="container">
		<br><br>
            <div id="header">
                <center>
                
                <?php
				include '../connection/koneksi.php';
				?>
                    <br>USER<br>
                </center>   
            </div>
            
            <div id="menu">
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
                    <li><a href="home.php#" class="dir" style="cursor: pointer">Dashboard</a>
                    </li>
					<li><a  class="dir" style="cursor: pointer">Karyawan</a>
					<ul>
					 <li><a href="karyawan.php">Tambah Data Karyawan</a></li>
					 <li><a href="tampildata_karyawan.php">Tabel Data Karyawan</a></li>
					 <li><a href="edit_hapus_karyawan.php"> Hapus / Edit Data Karyawan</a></li>
					 </ul>
                    </li>
					<li><a class="dir" style="cursor: pointer">Penilaian</a>
                        <ul>
                           <li><a href="penilaian.php">Tambah Penilaian Karyawan</a></li>
                           <li><a href="tampildata_penilaian.php">Tabel Penilaian Karyawan</a></li>
					       <li><a href="edit_hapus_penilaian.php"> Hapus/Edit Penilaian Karyawan</a></li>
                        </ul>
                    </li>
                    </li>
                   <li><a class="dir" style="cursor: pointer">Nilai Prestasi</a>
                        <ul>
                             <li><a href="tampildata_loyalitas.php">Nilai Loyalitas Kerja </a></li>
                            <li><a href="tampil_disiplin.php">Nilai Disiplin Kerja</a></li>
							<li><a href="tampil_hubungan.php">Nilai Hubungan Kerja</a></li>
							<li><a href="tampil_tanggungjawab.php">Nilai Tanggung Jawab Kerja</a></li>
							<li><a href="tampil_kepemimpinan.php">Nilai Kepemimpinan Kerja</a></li>
							<li><a href="tampil_prestasi.php">Nilai Prestasi Karyawan</a></li>
                        </ul>
                   </li>
                    
                     <li><a class="dir" style="cursor: pointer">Nilai Total</a>
					<ul>
					<li><a href="nilai_total.php"> Total Penilaian Kinerja Karyawan</a></li>
					</ul>
                    </li>
					<li><a class="dir" style="cursor: pointer">Master</a>
                        <ul>
                             <li><a href="user.php">Users</a></li>
                        </ul>
                    </li>
                 </ul>

                 <!-- Menu Bagian Kanan -->
                 <ul class="dropdown dropdown-horizontal"  style="float: right;">
                    <li><a href="home.php" style="cursor: pointer">Home Web</a></li>
                     <li><a href="logout.php#" class="dir" style="cursor: pointer">Logout</a></li>
                 </ul>
            </div>
            <div id="content" style="min-height: 400px">
            <div style="margin-left:60px;">
            <button class="ui-state-default ui-corner-all" id="btnAddUser" name="btnAddUser" style="height: 30px; width: 125px; 
            cursor: pointer;">Add User</button><br><br>
            </div>

				 <!-- Tabel List user -->
                  <table style="margin-left:60px" id="ListUser" cellpadding="2" cellspacing="0" border="0">
                     <thead class="ui-state-default">
                         <tr>
                             <td width="0" style="display: none">xID</td>
                             <td width="300" align="left" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Username</td>
                             <td width="0" style="display: none">Password</td>
                             <td width="200" align="left" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Status</td>
                             <td width="250" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td width="0" style="display: none">xID</td>
                             <td width="300" align="left" style="border-right: 1px solid #fff; border-left: 1px solid;">Username</td>
                             <td width="0" style="display: none">Password</td>
                             <td width="200" align="left" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Status</td>
                             <td width="250" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                         </tr>
                     </tbody>
                 </table>

                
                <div id="frmAddUser" title="Add New User">
                	<fieldset>
                         <input type="hidden" id="txtxID" name="txtxID">
                         <label>Username</label><input type="text" id="txtUsername" name="txtUsername" size="25"><br>
                         <label>Password</label><input type="password" id="txtPassword" name="txtPassword" size="25"><br>
                         <label>Status</label>
                         <select id="optStatus" name="optStatus">
                             <option value="Enabled">Enabled</option>
                             <option value="Disabled">Disabled</option>
                         </select><br>
                     </fieldset>
                 </div>
		
            </div> 
            <div id="footer">
                CV. Jati Kusuma ©2011 All Right to Copied.<br>Version 1.0
            </div>
        </div>
    </body>
</html>
