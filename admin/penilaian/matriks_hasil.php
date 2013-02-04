<?
 include "../../connection/koneksi.php";
?>
<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MATRIK HASIL</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" /> 
        <link type="text/css" rel="stylesheet" href="../../css/smoothness/jquery-ui-1.8.13.custom.css"/>  
         
        <script type="text/javascript" src="../../js/jquery-ui-1.8.13.custom.min.js"></script>   
        <script type="text/javascript">	
        </script> 
         
         
    </head>
        <div id="container">
            <div id="header">
            
                <center>
                    <br>MATRIK HASIL<br>
                </center>
                
            </div>
            <div id="menu">
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
               
                    <li><a class="dir" style="cursor: pointer">Pembobotan</a>
                        <ul>
                            <li><a href="../admin/penilaian/penilaian_antar_kriteria.php">Kriteria</a></li>
                            <li><a href="../admin/penilaian/penilaian_antar_Subkriteria_Kedisiplinan.php">Subkriteria Kedisiplinan</a></li>
                            <li><a href="../admin/penilaian/penilaian_antar_Subkriteria_Kreatifitas.php">Subkriteria Kreatifitas</a></li>
                            <li><a href="../admin/penilaian/penilaian_antar_Subkriteria_Perilaku.php">Subkriteria Perilaku</a></li>
                        </ul>
                    </li>
                     <li><a href="matriks_hasil.php" class="dir" style="cursor: pointer">Matrik Hasil</a>
                    </li>
                    <li><a href="penilaian_kayu.php" class="dir" style="cursor: pointer">Penilaian Karyawan</a>
                    </li> 
                 </ul>

                 <!-- Menu Bagian Kanan -->
                 <ul class="dropdown dropdown-horizontal"  style="float: right;">
                     <li><a href="../home.php" style="cursor: pointer">Home Web</a></li>
                 </ul>
            </div>
            
            <!-- Menu Bagian Tengah -->
            <div id="content"> 
            <form id="kriteria">
            <br><br>
            <div id="line" style="width:640px; margin-left:140px;"></div>
            <table style="margin-top:15px; margin-left:140px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"><b>Kedisiplinan</b></td>
                    <td style="text-align:center;"><b>Kreatifitas</b></td> 
                    <td style="text-align:center;"><b>Perilaku</b></td>
                </tr>
                <tr>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahserat" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahwarna" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahketahanan" name="" size="10">
                    </td>
                 <tr>
                    <td style="text-align:center;">Baik</td>
                    <td style="text-align:center;">Baik</td>
                    <td style="text-align:center;">Baik</td>
                 <tr>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahserat" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahwarna" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahketahanan" name="" size="10">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">Cukup</td>
                    <td style="text-align:center;">Cukup</td>
                    <td style="text-align:center;">Cukup</td>
                <tr>
                <tr>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahserat" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahwarna" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahketahanan" name="" size="10">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">Kurang</td>
                    <td style="text-align:center;">Kurang</td>
                    <td style="text-align:center;">Kurang</td>
                </tr>
                 <tr>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahserat" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahwarna" name="" size="10"></td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahketahanan" name="" size="10">
                    </td>
                </tr>
                </thead>
            </table>
             <div id="line" style="width:640px; margin-left:140px;"></div>
            <br><br>
              <div style="margin-left:565px;">
           			<button class="ui-state-default ui-corner-all"  type="button" onClick=""
                    id="btnLogin" name="btnLogin" style="height: 30px; width: 70px;">Proses</button>
                    <button class="ui-state-default ui-corner-all" id="btnSimpan" name="btnSimpan" 
                    style="height: 30px; width: 70px;" type="button" onClick="">Save</button>
                    <button class="ui-state-default ui-corner-all" id="btnRefresh" onClick="" name="btnRefresh" 
                    style="height: 30px; width: 70px;">Refresh</button>
                  
             </div>
			 </form>
             </div>
      
            
             <!-- Menu Bagian Bawah -->
            <div id="footer">
            PT. Maretska Kirana Technologies</a> ©2011.<br>Version 1.0
            </div>
        </div>
    </body>
</html>
