<?
 session_start();
 include "../../connection/koneksi.php";
?>
<!--To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Penilaian Kayu</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" /> 
        <link type="text/css" rel="stylesheet" href="../../css/smoothness/jquery-ui-1.8.13.custom.css"/> 
        
        <script type="text/javascript" src="../../js/jquery-1.4.4.min.js"></script> 
        <script type="text/javascript" src="../../js/jquery-ui-1.8.13.custom.min.js"></script> 
        <script type="text/javascript" src="../../js/jquery-ui-1.8.7.custom.min.js"></script>  
        
        <style>
            body {font-size: 12px; font-family: verdana, sans-serif;}
            label { position: absolute; text-align:left; width:100px; margin: 0 0 5px 0;}
            input, textarea, select { margin: 0 0 5px 60px; }
            fieldset { padding:0; border:0; margin-top:25px; }
            button {cursor: pointer}
        </style>
        <script type="text/javascript">
		
            
            $(function (){
                $("#btnAddSub1").click(function(){
                    $("#ui-dialog-title-frmSub1").text('Cari Sub Kriteria Serat')
                    $("#frmSub1").dialog("open");
                });
				
              
                $("#frmSub1").dialog({
                    autoOpen: false,
                    width: 500,
                    height: 200,
                    modal: true
                    
                })
            })  
            
            $(function (){
                $("#btnAddSub2").click(function(){ 
                    $("#ui-dialog-title-frmSub2").text('Cari Sub Kriteria Warna')
                    $("#frmSub2").dialog("open");
                });
              
                $("#frmSub2").dialog({
                    autoOpen: false,
                    width: 500,
                    height: 200,
                    modal: true
                    
                })
            })
            
            $(function (){
                $("#btnAddSub3").click(function(){ 
                    $("#ui-dialog-title-frmSub3").text('Cari Sub Kriteria Ketahanan')
                    $("#frmSub3").dialog("open");
                });
              
                $("#frmSub3").dialog({
                    autoOpen: false,
                    width: 500,
                    height: 200,
                    modal: true
                    
                })
            })
          $(function (){
                $("#btnView").click(function(){                    
                    $("#ui-dialog-title-frmInfofrmViewHasil").text('Data Penilaian')
                    $("#frmView").dialog("open");
                });
                
                $("#search1").click(function(){
                    refreshPenilaian();
                })
                
                $("#refresh").click(function(){
                    refreshPenilaian();
                })
                                             
                $("#frmView").dialog({
                    autoOpen: false,
                    width: 705,
                    height: 490,
                    modal: true
                    
                })
            })  
            
            function refreshPenilaian(){
                var param = "action=ListView";                                       
                $.ajax({
                    type: "POST",
                    cache: "false",
                    datatype: "html",
                    url: "proses_hasil_kayu.php",
                    data: param,
                    success: function(Data){
                        $("#ListView tbody tr").remove();
                        $("#ListView tbody").append(Data);
                    }
                });
            }
			

			
			
			function getKriteria1(){
                $.ajax({
                    type: "POST",
                    cache: "false",
                    dataType: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=GetKriteria1",
                     success: function(Hasil){
                        $("#Hasil1").val(Hasil);
                     }
                });
            }
            
            function getKriteria2(){
                $.ajax({
                    type: "POST",
                    cache: "false",
                    dataType: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=GetKriteria2",
                     success: function(Hasil){
                        $("#Hasil2").val(Hasil);
                     }
                });
            }
            
            function getKriteria3(){
                $.ajax({
                    type: "POST",
                    cache: "false",
                    dataType: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=GetKriteria3",
                     success: function(Hasil){
                        $("#Hasil3").val(Hasil);
                     }
                });
            }
            
            
            function dataKriteria(){
                $("#Kd_Kriteria1").val("1");
                $("#Nama_Kriteria1").val("Serat");
                
                $("#Kd_Kriteria2").val("2");
                $("#Nama_Kriteria2").val("Warna");
                
                $("#Kd_Kriteria3").val("3");
                $("#Nama_Kriteria3").val("Ketahanan");           
            
            }
            
            function refreshSub1(){                                       
                $.ajax({
                    type: "POST",
                    cache: "false",
                    datatype: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=ListSub1",
                    success: function(Data){
                        $("#ListSub1 tbody tr").remove();
                        $("#ListSub1 tbody").append(Data);
                    }
                });
            }
            
            function PilihSub1(Kd,Nama,Hasil){
                $("#Kd_SubKriteria1").val(Kd);
                $("#Nama_SubKriteria1").val(Nama);
                $("#Hasil_Sub1").val(Hasil);
                $("#frmSub1").dialog("close");
            }
            
            function refreshSub2(){                                       
                $.ajax({
                    type: "POST",
                    cache: "false",
                    datatype: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=ListSub2",
                    success: function(Data){
                        $("#ListSub2 tbody tr").remove();
                        $("#ListSub2 tbody").append(Data);
                    }
                });
            }
            
            function PilihSub2(Kd,Nama,Hasil){
                $("#Kd_SubKriteria2").val(Kd);
                $("#Nama_SubKriteria2").val(Nama);
                $("#Hasil_Sub2").val(Hasil);
                $("#frmSub2").dialog("close");
            }
            
            function refreshSub3(){                                       
                $.ajax({
                    type: "POST",
                    cache: "false",
                    datatype: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=ListSub3",
                    success: function(Data){
                        $("#ListSub3 tbody tr").remove();
                        $("#ListSub3 tbody").append(Data);
                    }
                });
            }
            
            function PilihSub3(Kd,Nama,Hasil){
                $("#Kd_SubKriteria3").val(Kd);
                $("#Nama_SubKriteria3").val(Nama);
                $("#Hasil_Sub3").val(Hasil);
                $("#frmSub3").dialog("close");
            }
            
          function refreshView(){                                       
                $.ajax({
                    type: "POST",
                    cache: "false",
                    datatype: "html",
                    url: "proses_hasil_kayu.php",
                    data: "action=ListView",
                    success: function(Data){
                        $("#ListView tbody tr").remove();
                        $("#ListView tbody").append(Data);
                    }
                });
            }
			
			 function PjmlKriteria(){
                Hasil1=eval(PenilaianAhp.Hasil1.value)
                Hasil2=eval(PenilaianAhp.Hasil2.value) 
                Hasil3=eval(PenilaianAhp.Hasil3.value)
                Nilai_Kriteria=Hasil1+Hasil2+Hasil3
                PenilaianAhp.Nilai_Kriteria.value =Nilai_Kriteria.toFixed(4);
            }
            
            function PjmlSubKriteria(){
                Hasil_Sub1=eval(PenilaianAhp.Hasil_Sub1.value)
                Hasil_Sub2=eval(PenilaianAhp.Hasil_Sub2.value) 
                Hasil_Sub3=eval(PenilaianAhp.Hasil_Sub3.value)
                Nilai_SubKriteria=Hasil_Sub1+Hasil_Sub2+Hasil_Sub3
                PenilaianAhp.Nilai_SubKriteria.value =Nilai_SubKriteria.toFixed(4);
            }
            
            function PjmlMetodeAhp(){
                Nilai_Kriteria=eval(PenilaianAhp.Nilai_Kriteria.value)
                Nilai_SubKriteria=eval(PenilaianAhp.Nilai_SubKriteria.value)
                Hasil=Nilai_Kriteria+Nilai_SubKriteria
                PenilaianAhp.Hasil.value =Hasil.toFixed(4);
            }
			
			 function Save(){
               var parameter = "action=Save Current Kriteria"  +
			   					"&Kd_Kriteria1=" + $("#Kd_Kriteria1").val() +
                                "&Kd_Kriteria2=" + $("#Kd_Kriteria2").val() +
                                "&Kd_Kriteria3=" + $("#Kd_Kriteria3").val() +
                                "&Kd_Sub_Kriteria1=" + $("#Kd_SubKriteria1").val() +
                                "&Kd_Sub_Kriteria2=" + $("#Kd_SubKriteria1").val() +
                                "&Kd_Sub_Kriteria3=" + $("#Kd_SubKriteria1").val() +
                                "&Hasil_Kriteria=" + $("#Nilai_Kriteria").val() +
                                "&Hasil_SubKriteria=" + $("#Nilai_SubKriteria").val() +
                                "&Hasil=" + $("#Hasil").val() +
								"&Peringkat=" + $("#txtPeringkat").val() +
                                "&Keterangan=" + $("#txtKeterangan").val() ;
                            
                               //alert (parameter);
                               
                            $.ajax({
                                type: "POST",
                                cache: "false",
                                url: "proses_hasil_kayu.php",
                                data: parameter,
                                success: function(result){
                                    alert(result);

                                }
                            });
           				}
						
			function cekhasil(){
                 Hasil=eval(PenilaianAhp.Hasil.value)
                 if (Hasil > 13)                    
                     {                         
                         txtKeterangan.value="KAYU KAMPER";
						 txtPeringkat.value="1";
                     }
                 else if (Hasil >=11 )
                     {
                         txtKeterangan.value="KAYU ULIN";  
						 txtPeringkat.value="2";
                     }
				 else if (Hasil >=8)
                     {
                         txtKeterangan.value="KAYU KRUWING";  
						 txtPeringkat.value="3";
                     }
					 
				 else if (Hasil >=6)
                     {
                         txtKeterangan.value="KAYU MERBAU"; 
						 txtPeringkat.value="4";
                     }
					 
				 else if (Hasil <6)
                     {
                         txtKeterangan.value="KAYU MERANTI";  
 						 txtPeringkat.value="5";

                     }
          }              
		
        </script> 
            
    </head>
     <body style="background-image: url('images/backgroundbody1.png')" onLoad="refreshSub1(),refreshSub2(),refreshSub3(),refreshView() ">
        <div id="container">
            <div id="header">
            
                <center>
                    <br>
                    PENILAIAN KARYAWAN<br>
                </center>
                
            </div>
            <div id="menu">
            
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
                    <li><a class="dir" style="cursor: pointer">Pembobotan</a>
                        <ul>
                            <li><a href="penilaian_antar_kriteria.php">Kriteria</a></li>
                            <li><a href="penilaian_antar_Subkriteria_Serat.php">Subkriteria Serat</a></li>
                            <li><a href="penilaian_antar_Subkriteria_Warna.php">Subkriteria Warna</a></li>
                            <li><a href="penilaian_antar_Subkriteria_Ketahanan.php">Subkriteria Ketahanan</a></li>
                        </ul>
                    </li>
                    <li><a href="hasil_kayu.php" class="dir" style="cursor: pointer">Penilaian Kayu</a>
                    </li>
                 </ul>

                 <!-- Menu Bagian Kanan -->
                 <ul class="dropdown dropdown-horizontal"  style="float: right;">
                     <li><a href="../home.php" style="cursor: pointer">Home Web</a></li>
                 </ul>
            </div>
            
            <!-- Menu Bagian Tengah -->
            <div id="content">
            <form id="PenilaianAhp">
            
            <div id="line" style="width:855px;"><b>DATA KRITERIA</b></div>
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Kd Kriteria</b></td> 
                    <td style="text-align:center;"><b>Nama Kriteria</b></td>
                    <td style="text-align:center;"><b>Nilai</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Kriteria 1</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_Kriteria1" name="" size="10" 
                     readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_Kriteria1" name="" size="10" 
                    readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil1" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Kriteria 2</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_Kriteria2" name="" size="10" 
                    readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_Kriteria2" name="" size="10" 
                    readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil2" name="" size="10" readonly=""></td>
                </tr>
                <tr>
                	<td width="200px" style="text-align:left;"><b>Kriteria 3</b></td>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_Kriteria3" name="" size="10" readonly="">
                    </td> 
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_Kriteria3" name="" size="10" readonly="">
                    </td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil3" name="" size="10" readonly="">
                    </td>
                </tr>
                </thead>
            </table>
            <div id="line" style="width:855px;"></div>
            <br><br>
            		
                    <div style="margin-left:825px;">
                    <button class="ui-state-default ui-corner-all" id="btnSimpan" name="btnSimpan" 
                    style="height: 30px; width: 70px;" type="button" onClick=" getKriteria1(),getKriteria2(),getKriteria3(),dataKriteria()">Add
                    </button>
                    </div>
                    
            <div id="line" style="width:855px;"><b>DATA SUB KRITERIA</b></div>
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Kd Sub Kriteria</b></td> 
                    <td style="text-align:center;"><b>Nama kriteria</b></td>
                    <td style="text-align:center;"><b>Nilai</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Serat</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_SubKriteria1" name="" size="10" 
                     readonly=""></td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_SubKriteria1" name="" size="10"
                     readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil_Sub1" name="" size="10" readonly="">
                    <button type="button" class="ui-widget-header" id="btnAddSub1"  style="height: 23px; width: 30px; margin-left: 5px;">...
                    </button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Warna</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_SubKriteria2" name="" size="10"
                     readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_SubKriteria2" name="" size="10" 
                    readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil_Sub2" name="" size="10" readonly="">
                    <button type="button" class="ui-widget-header" id="btnAddSub2" style="height: 23px; width: 30px; margin-left: 5px;">...
                    </button></td>
                </tr>
                <tr>
                	<td width="200px" style="text-align:left;"><b>Ketahanan</b></td>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Kd_SubKriteria3" name="" size="10" readonly="">
                    </td> 
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Nama_SubKriteria3" name="" size="10"
                     readonly="">
                    </td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="Hasil_Sub3" name="" size="10" readonly="">
                    <button type="button" class="ui-widget-header" id="btnAddSub3" style="height: 23px; width: 30px; margin-left: 5px;">...
                    </button></td>
                </tr>
                </thead>
            </table>
            <div id="line" style="width:855px;"></div>
            <br><br>
            <div style="margin-left:825px;">
                 
                   <button class="ui-state-default ui-corner-all" type="button" id="btnRefresh"
                   name="btnRefresh" onClick="PjmlKriteria(),PjmlSubKriteria(),PjmlMetodeAhp(),cekhasil()" style="height: 30px; width: 70px;">Proses</button>  
            </div>
            <div id="line" style="width:855px;"><b>HASIL PENILAIAN METODE AHP</b></div>
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px; width:855px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"><b>Jumlah Kriteria</b></td> 
                    <td style="text-align:center;"><b>Jumlah Sub Kriteria</b></td>
                    <td style="text-align:center;"><b>Hasil Metode AHP</b></td>
                </tr>
                <tr style="text-align:center;">
                    <td><input type="text" style="text-align:center; font-weight:bold;" id="Nilai_Kriteria" name="" size="10" readonly=""></td> 
                    <td><input type="text" style="text-align:center; font-weight:bold;" id="Nilai_SubKriteria"name="" size="10" readonly=""></td> 
                    <td><input type="text" style="text-align:center; font-weight:bold;" id="Hasil" name="" size="10" readonly=""></td> 
                </tr>
            </thead>
            </table>
            
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px; width:855px;">
            <thead class="ui-state-default">
            <tr>
            <td style="text-align: center;"> 
            <input type="text" id="txtKeterangan" style="  margin-left: 0px; text-align: center;  width: 600px; 
            height: 60px; font-size: 14px; font-weight: bold;" readonly="readonly">
            <input type="hidden" id="txtPeringkat" style="  margin-left: 0px; text-align: center;  width: 600px; 
            height: 60px; font-size: 14px; font-weight: bold;" readonly="readonly"></td> 
            </tr>
            </thead>
            </table>
            <div id="line" style="width:855px;"></div>
            <br><br>
            <div style="margin-left:680px;">
                    <button class="ui-state-default ui-corner-all" id="btnSimpan" name="btnSimpan" 
                    style="height: 30px; width: 70px;" type="button" onClick="Save()">Save</button>
                    <button class="ui-state-default ui-corner-all" id="btnCancel" onClick="" name="btnCancel" type="button" 
                    style="height: 30px; width: 70px;">Cancel</button> 
                    <button class="ui-state-default ui-corner-all" id="btnView" onClick="" name="btnView" type="button"
                    style="height: 30px; width: 70px;" value="value">View</button> 
            </div>
            </form> 
            
            <div id="frmSub1" title="Form Cari Sub Kriteria">
                        <fieldset>
                            <form>
                                <table id="ListSub1" cellpadding="2" cellspacing="0">
                                    <thead class="ui-state-default">
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>                            
                        </fieldset>                                    
                    </div>
                    <div id="frmSub2" title="Form Cari Sub Kriteria">
                        <fieldset>
                            <form>
                                <table id="ListSub2" cellpadding="2" cellspacing="0">
                                    <thead class="ui-state-default">
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>                            
                        </fieldset>                                    
                    </div>
                    <div id="frmSub3" title="Form Cari Sub Kriteria">
                        <fieldset>
                            <form>
                                <table id="ListSub3" cellpadding="2" cellspacing="0">
                                    <thead class="ui-state-default">
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Kd Sub Kriteria</td>
                                            <td width="300" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nama</td>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Nilai</td>
                                            <td width="80" align="center" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Action</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>                            
                        </fieldset>                                    
                    </div>
                    <div id="frmView" title="Data Penilaian">
                        <fieldset>
                            <form> 
                            <button class="ui-state-default ui-corner-all" type="button" id="refresh" onClick="" style="height: 25px; width: 90px;">Refresh
                            </button>                             
                            <br><br>  
                                <table id="ListView" cellpadding="2" cellspacing="0">
                                    <thead class="ui-state-default">
                                        <tr>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">No Penilaian</td>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Hasil</td>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Peringkat</td>
                                            <td width="325" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Keterangan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="100" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">No Penilaian</td>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Hasil</td>
                                            <td width="200" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Peringkat</td>
                                            <td width="325" style="border-right: 1px solid #fff; border-left: 1px solid #fff;">Keterangan</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>                            
                        </fieldset>                                    
                    
            </div>               
            </div>
                  
            
             <!-- Menu Bagian Bawah -->
            <div id="footer">PT. Maretska Kirana Technologies</a> ©2012.<br>Version 1.0
            </div>
        </div>
    </body>
</html>
