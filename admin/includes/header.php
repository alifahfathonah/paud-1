<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Pendidik Paud</title>
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_ADDR."/admin/admin.css" ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_ADDR."/admin/admin.css" ?>" />      
        <style type="text/css">
<!--
.style1 {color: #FFFFFF}

a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #99CC66;
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
td {font-family: Verdana, Arial;font-size: 12px;color:#000000;}
-->
        </style>
</head>
    <body>
    <div id="container">
	
          <div id="header">
            <center>
			<br>
                    Paud Nur Rahma Tanjung              
              <p>                      ADMIN PENDIDIK </p>
   		    </center>
                
      </div>
           <div id="menu">
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
                    <li><a href="home.php#" class="dir" style="cursor: pointer">Dashboard</a>
                    </li>
					<li><a  class="dir" style="cursor: pointer">Visi Misi</a>
					<ul>
					 <li><a href="<?php echo ADMIN_ADDR."/editdata_visi.php"; ?>">Visi</a></li>
					 <li><a href="<?php echo ADMIN_ADDR."/editdata_misi.php"; ?>">Misi</a></li>
					
					 </ul>
                    </li>
					<li><a href='<?php echo ADMIN_ADDR."/editdata_history.php" ?>' class="dir" style="cursor: pointer">Sejarah Singkat</a>
                        
                    </li>
                    </li>
                   <li><a href='<?php echo ADMIN_ADDR."/tampildata_materi.php" ?>' class="dir" style="cursor: pointer">Materi</a>
                        <ul>
                            <li><a href="">Tambah Materi</a></li>
                        </ul>
                   </li>
                    
                     <li><a class="dir" style="cursor: pointer">Nilai Total</a>
					<ul>
					<li><a href="nilai_total.php"> Total Penilaian Kinerja Karyawan</a></li>
					</ul>
                    </li>
					<li><a class="dir" style="cursor: pointer">Master</a>
                        <ul>
                             <li><a class='dir' href="tampildata_users.php">Users</a>
				<ul>
					<li><a href="<?php echo ADMIN_ADDR."/tambah_users.php" ?>"> Tambah User</a></li>
					</ul>
			     </li>
                        </ul>
                    </li>
                 </ul>

                 <!-- Menu Bagian Kanan -->
                 <ul class="dropdown dropdown-horizontal"  style="float: right;">
                     <li><a href="home.php" style="cursor: pointer">Home Web</a></li>
                     <li><a href="logout.php#" class="dir" style="cursor: pointer">Logout</a></li>
                 </ul>
            </div>
			<br><br>