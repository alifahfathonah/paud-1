<?php
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
        <title>Penilaian Dan Perhitungan Sub Kriteria perilaku</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/admin.css" />
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" /> 
        <link type="text/css" rel="stylesheet" href="../../css/smoothness/jquery-ui-1.8.13.custom.css"/>   
        
         <script type="text/javascript" src="../../js/jquery-1.4.4.min.js"></script>
         <script type="text/javascript" src="../../js/jquery-ui-1.8.13.custom.min.js"></script> 
         <script type="text/javascript" src="../../js/jquery-ui-1.8.7.custom.min.js"></script>
         <style>
            body {font-size: 12px; font-family: verdana, sans-serif;}
            button {cursor: pointer}
         </style>   
         <script type="text/javascript">
		 
		  $(function (){
                $("#btnInfoNilai").click(function(){                    
                    $("#ui-dialog-title-frmInfoNilai").text('Information')
                    $("#frmInfoNilai").dialog("open");
                });
                                             
                $("#frmInfoNilai").dialog({
                    autoOpen: false,
                    width: 705,
                    height: 480,
                    modal: true                  
                })
            })
			
		 var num=10;
		 var result=num.toFixed(2);
		 result=num.toFixed(4);
		   
         	function Bagi1 (){
				kedisiplinan1=eval(subkriteria.kedisiplinan1.value)
				kreatifitas1=eval(subkriteria.kreatifitas1.value)
				kreatifitas2=kedisiplinan1/kreatifitas1
				subkriteria.kreatifitas2.value=kreatifitas2.toFixed(4);
				
				}
				
			function Bagi2 (){
				kedisiplinan1=eval(subkriteria.kedisiplinan1.value)
				perilaku1=eval(subkriteria.perilaku1.value)
				perilaku3=kedisiplinan1/perilaku1
				subkriteria.perilaku3.value=perilaku3.toFixed(4);
				
				}
				
			function Bagi3 (){
				perilaku2=eval(subkriteria.perilaku2.value)
				kedisiplinan2=eval(subkriteria.kedisiplinan2.value)
				kedisiplinan3=perilaku2/kedisiplinan2
				subkriteria.kedisiplinan3.value=kedisiplinan3.toFixed(4);
				
				}
				
			function Jumlah1 (){
				kedisiplinan1=eval(subkriteria.kedisiplinan1.value)
				kreatifitas2=eval(subkriteria.kreatifitas2.value)
				perilaku3=eval(subkriteria.perilaku3.value)
				jumlahkedisiplinan=kedisiplinan1+kreatifitas2+perilaku3
				subkriteria.jumlahkedisiplinan.value=jumlahkedisiplinan.toFixed(4);
				
				}
				
			function Jumlah2 (){
				kreatifitas1=eval(subkriteria.kreatifitas1.value)
				perilaku2=eval(subkriteria.perilaku2.value)
				kedisiplinan3=eval(subkriteria.kedisiplinan3.value)
				jumlahkreatifitas=kreatifitas1+perilaku2+kedisiplinan3
				subkriteria.jumlahkreatifitas.value=jumlahkreatifitas.toFixed(4);
				
				}
				
			function Jumlah3 (){
				perilaku1=eval(subkriteria.perilaku1.value)
				kedisiplinan2=eval(subkriteria.kedisiplinan2.value)
				kreatifitas3=eval(subkriteria.kreatifitas3.value)
				jumlahperilaku=perilaku1+kedisiplinan2+kreatifitas3
				subkriteria.jumlahperilaku.value=jumlahperilaku.toFixed(4);
				
				}
				
			function BagiJmlkedisiplinan1 (){
				kedisiplinan1=eval(subkriteria.kedisiplinan1.value)
				jumlahkedisiplinan=eval(subkriteria.jumlahkedisiplinan.value)
				kedisiplinan4=kedisiplinan1/jumlahkedisiplinan
				subkriteria.kedisiplinan4.value=kedisiplinan4.toFixed(4);
				
				}
				
        	 function BagiJmlkedisiplinan2 (){
				kreatifitas2=eval(subkriteria.kreatifitas2.value)
				jumlahkedisiplinan=eval(subkriteria.jumlahkedisiplinan.value)
				kreatifitas5=kreatifitas2/jumlahkedisiplinan
				subkriteria.kreatifitas5.value=kreatifitas5.toFixed(4);
				
				}
			
			 function BagiJmlkedisiplinan3 (){
				perilaku3=eval(subkriteria.perilaku3.value)
				jumlahkedisiplinan=eval(subkriteria.jumlahkedisiplinan.value)
				perilaku6=perilaku3/jumlahkedisiplinan
				subkriteria.perilaku6.value=perilaku6.toFixed(4);
				
				}
				
			function BagiJmlkreatifitas1 (){
				kreatifitas1=eval(subkriteria.kreatifitas1.value)
				jumlahkreatifitas=eval(subkriteria.jumlahkreatifitas.value)
				kreatifitas4=kreatifitas1/jumlahkreatifitas
				subkriteria.kreatifitas4.value=kreatifitas4.toFixed(4);
				
				}
			
			function BagiJmlkreatifitas2 (){
				perilaku2=eval(subkriteria.perilaku2.value)
				jumlahkreatifitas=eval(subkriteria.jumlahkreatifitas.value)
				perilaku5=perilaku2/jumlahkreatifitas
				subkriteria.perilaku5.value=perilaku5.toFixed(4);
				
				}
				
			function BagiJmlkreatifitas3 (){
				kedisiplinan3=eval(subkriteria.kedisiplinan3.value)
				jumlahkreatifitas=eval(subkriteria.jumlahkreatifitas.value)
				kedisiplinan6=kedisiplinan3/jumlahkreatifitas
				subkriteria.kedisiplinan6.value=kedisiplinan6.toFixed(4);
				
				}
				
			function BagiJmlperilaku1 (){
				perilaku1=eval(subkriteria.perilaku1.value)
				jumlahperilaku=eval(subkriteria.jumlahperilaku.value)
				perilaku4=perilaku1/jumlahperilaku
				subkriteria.perilaku4.value=perilaku4.toFixed(4);
				
				}
				
			function BagiJmlperilaku2 (){
				kedisiplinan2=eval(subkriteria.kedisiplinan2.value)
				jumlahperilaku=eval(subkriteria.jumlahperilaku.value)
				kedisiplinan5=kedisiplinan2/jumlahperilaku
				subkriteria.kedisiplinan5.value=kedisiplinan5.toFixed(4);
				
				}
				
			function BagiJmlperilaku3 (){
				kreatifitas3=eval(subkriteria.kreatifitas3.value)
				jumlahperilaku=eval(subkriteria.jumlahperilaku.value)
				kreatifitas6=kreatifitas3/jumlahperilaku
				subkriteria.kreatifitas6.value=kreatifitas6.toFixed(4);
				
				}
				
			function JumlahAkhir1 (){
				kedisiplinan4=eval(subkriteria.kedisiplinan4.value)
				kreatifitas4=eval(subkriteria.kreatifitas4.value)
				perilaku4=eval(subkriteria.perilaku4.value)
				jumlah1=kedisiplinan4+kreatifitas4+perilaku4
				subkriteria.jumlah1.value=jumlah1.toFixed(4);
				
				}
				
			function JumlahAkhir2 (){
				kreatifitas5=eval(subkriteria.kreatifitas5.value)
				perilaku5=eval(subkriteria.perilaku5.value)
				kedisiplinan5=eval(subkriteria.kedisiplinan5.value)
				jumlah2=kreatifitas5+perilaku5+kedisiplinan5
				subkriteria.jumlah2.value=jumlah2.toFixed(4);
				
				}
				
			function JumlahAkhir3 (){
				perilaku6=eval(subkriteria.perilaku6.value)
				kedisiplinan6=eval(subkriteria.kedisiplinan6.value)
				kreatifitas6=eval(subkriteria.kreatifitas6.value)
				jumlah3=perilaku6+kedisiplinan6+kreatifitas6
				subkriteria.jumlah3.value=jumlah3.toFixed(4);
				
				}
				
			function JmlPrioritas1 (){
				jumlah1=eval(subkriteria.jumlah1.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				prioritas1=jumlah1/JmlNilaiKriteria
				subkriteria.prioritas1.value=prioritas1.toFixed(4);
				
				}
			
			function JmlPrioritas2 (){
				jumlah2=eval(subkriteria.jumlah2.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				prioritas2=jumlah2/JmlNilaiKriteria
				subkriteria.prioritas2.value=prioritas2.toFixed(4);
				
				}
				
			function JmlPrioritas3 (){
				jumlah3=eval(subkriteria.jumlah3.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				prioritas3=jumlah3/JmlNilaiKriteria
				subkriteria.prioritas3.value=prioritas3.toFixed(4);
				
				}
				
			//PENJUMLAHAN SETIAP BARIS KRITERIA
				
			function PerkalianMatrixNilai (){
				kedisiplinan1=eval(subkriteria.kedisiplinan1.value)
				prioritas1=eval(subkriteria.prioritas1.value)
				kedisiplinan7=kedisiplinan1 * prioritas1
				subkriteria.kedisiplinan7.value=kedisiplinan7.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai2 (){
				kreatifitas2=eval(subkriteria.kreatifitas2.value)
				prioritas1=eval(subkriteria.prioritas1.value)
				kreatifitas8=kreatifitas2 * prioritas1
				subkriteria.kreatifitas8.value=kreatifitas8.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai3 (){
				perilaku3=eval(subkriteria.perilaku3.value)
				prioritas1=eval(subkriteria.prioritas1.value)
				perilaku9=perilaku3 * prioritas1
				subkriteria.perilaku9.value=perilaku9.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai4 (){
				kreatifitas1=eval(subkriteria.kreatifitas1.value)
				prioritas2=eval(subkriteria.prioritas2.value)
				kreatifitas7=kreatifitas1 * prioritas2
				subkriteria.kreatifitas7.value=kreatifitas7.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai5 (){
				perilaku2=eval(subkriteria.perilaku2.value)
				prioritas2=eval(subkriteria.prioritas2.value)
				perilaku8=perilaku2 * prioritas2
				subkriteria.perilaku8.value=perilaku8.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai6 (){
				kedisiplinan3=eval(subkriteria.kedisiplinan3.value)
				prioritas2=eval(subkriteria.prioritas2.value)
				kedisiplinan9=kedisiplinan3 * prioritas2
				subkriteria.kedisiplinan9.value=kedisiplinan9.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai7 (){
				perilaku1=eval(subkriteria.perilaku1.value)
				prioritas3=eval(subkriteria.prioritas3.value)
				perilaku7=perilaku1 * prioritas3
				subkriteria.perilaku7.value=perilaku7.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai8 (){
				kedisiplinan2=eval(subkriteria.kedisiplinan2.value)
				prioritas3=eval(subkriteria.prioritas3.value)
				kedisiplinan8=kedisiplinan2 * prioritas3
				subkriteria.kedisiplinan8.value=kedisiplinan8.toFixed(4);
				
				}
				
			function PerkalianMatrixNilai9 (){
				kreatifitas3=eval(subkriteria.kreatifitas3.value)
				prioritas3=eval(subkriteria.prioritas3.value)
				kreatifitas9=kreatifitas3 * prioritas3
				subkriteria.kreatifitas9.value=kreatifitas9.toFixed(4);
				
				}
				
			function JumlahBarisKriteria1 (){
				kedisiplinan7=eval(subkriteria.kedisiplinan7.value)
				kreatifitas7=eval(subkriteria.kreatifitas7.value)
				perilaku7=eval(subkriteria.perilaku7.value)
				jumlah4=kedisiplinan7+kreatifitas7+perilaku7
				subkriteria.jumlah4.value=jumlah4.toFixed(4);
				
				}
				
			function JumlahBarisKriteria2 (){
				kreatifitas8=eval(subkriteria.kreatifitas8.value)
				perilaku8=eval(subkriteria.perilaku8.value)
				kedisiplinan8=eval(subkriteria.kedisiplinan8.value)
				jumlah5=kreatifitas8+perilaku8+kedisiplinan8
				subkriteria.jumlah5.value=jumlah5.toFixed(4);
				
				}
				
			function JumlahBarisKriteria3 (){
				perilaku9=eval(subkriteria.perilaku9.value)
				kedisiplinan9=eval(subkriteria.kedisiplinan9.value)
				kreatifitas9=eval(subkriteria.kreatifitas9.value)
				jumlah6=perilaku9+kedisiplinan9+kreatifitas9
				subkriteria.jumlah6.value=jumlah6.toFixed(4);
				
				}
				
			//PERHITUNGAN RASIO KONSISTENSI KRITERIA
        
         	function RasioKonsistenasiKriteria1 (){
				jumlah4=eval(subkriteria.jumlah4.value)
				jmlbaris1=jumlah4
				subkriteria.jmlbaris1.value=jmlbaris1.toFixed(4);
				
				}
				
			function RasioKonsistenasiKriteria2 (){
				jumlah5=eval(subkriteria.jumlah5.value)
				jmlbaris2=jumlah5
				subkriteria.jmlbaris2.value=jmlbaris2.toFixed(4);
				
				}
				
			function RasioKonsistenasiKriteria3 (){
				jumlah6=eval(subkriteria.jumlah6.value)
				jmlbaris3=jumlah6
				subkriteria.jmlbaris3.value=jmlbaris3.toFixed(4);
				
				}
				
			function RasioKonsistenasiKriteria4 (){
				prioritas1=eval(subkriteria.prioritas1.value)
				prioritas4=prioritas1
				subkriteria.prioritas4.value=prioritas4.toFixed(4);
				
				}
				
			function RasioKonsistenasiKriteria5 (){
				prioritas2=eval(subkriteria.prioritas2.value)
				prioritas5=prioritas2
				subkriteria.prioritas5.value=prioritas5.toFixed(4);
				
				}
				
			function RasioKonsistenasiKriteria6 (){
				prioritas3=eval(subkriteria.prioritas3.value)
				prioritas6=prioritas3
				subkriteria.prioritas6.value=prioritas6.toFixed(4);
				
				}
				
			function JmlRasioKonsistenasiKriteria1 (){
				jmlbaris1=eval(subkriteria.jmlbaris1.value)
				prioritas4=eval(subkriteria.prioritas4.value)
				hasil1=jmlbaris1+prioritas4
				subkriteria.hasil1.value=hasil1.toFixed(4);
				
				}
				
			function JmlRasioKonsistenasiKriteria2 (){
				jmlbaris2=eval(subkriteria.jmlbaris2.value)
				prioritas5=eval(subkriteria.prioritas5.value)
				hasil2=jmlbaris2+prioritas5
				subkriteria.hasil2.value=hasil2.toFixed(4);
				
				}
				
			function JmlRasioKonsistenasiKriteria3 (){
				jmlbaris3=eval(subkriteria.jmlbaris3.value)
				prioritas6=eval(subkriteria.prioritas6.value)
				hasil3=jmlbaris3+prioritas6
				subkriteria.hasil3.value=hasil3.toFixed(4);
				
				}
				
			//TOTAL PERHITUNGAN RASIO KONSISTENSI KRITERIA
			
			function TotalPerhitunganRasioKriteria (){
				hasil1=eval(subkriteria.hasil1.value)
				hasil2=eval(subkriteria.hasil2.value)
				hasil3=eval(subkriteria.hasil3.value)
				Total=hasil1+hasil2+hasil3
				subkriteria.Total.value=Total.toFixed(4);
				
				}
			
			//HASIL PERHITUNGAN λ max = (Jumlah/n)
			
			function TotalPerhitunganJumlahλmaxx (){
				Total=eval(subkriteria.Total.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				Jumlahλmaxx=Total/JmlNilaiKriteria
				subkriteria.Jumlahλmaxx.value=Jumlahλmaxx.toFixed(4);
				
				}
				
			//HASIL PERHITUNGAN CI = ( λmax – n)/n
			
			function TotalPerhitunganCI (){
				Jumlahλmaxx=eval(subkriteria.Jumlahλmaxx.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				JmlNilaiKriteria=eval(subkriteria.JmlNilaiKriteria.value)
				λmaxn=(Jumlahλmaxx-JmlNilaiKriteria)/JmlNilaiKriteria
				subkriteria.λmaxn.value=λmaxn.toFixed(4);
				
				}
			
			//HASIL PERHITUNGAN CR = CI/IR 
				
			function TotalPerhitunganCR (){
				λmaxn=eval(subkriteria.λmaxn.value)
				IndeksRandom=eval(subkriteria.IndeksRandom.value)
				CIIR=λmaxn/IndeksRandom
				subkriteria.CIIR.value=CIIR.toFixed(4);
				
				}
				
				function clearText(){
               //FORM PENILAIAN ANTAR KRITERIA
                $("#kreatifitas1").val("");
                $("#perilaku1").val("");
                $("#kreatifitas2").val("");
                $("#kedisiplinan2").val("");
                $("#perilaku3").val("");
                $("#kedisiplinan3").val("");
                $("#jumlahkedisiplinan").val("");
                $("#jumlahkreatifitas").val("");
                $("#jumlahperilaku").val("");
				//FORM PERHITUNGAN NILAI PRIORITAS KRITERIA 
                $("#kedisiplinan4").val("");
                $("#kreatifitas4").val("");
                $("#perilaku4").val("");
                $("#jumlah1").val("");
                $("#prioritas1").val("");
                $("#kreatifitas5").val("");
                $("#perilaku5").val("");
                $("#kedisiplinan5").val("");
                $("#jumlah2").val("");
                $("#prioritas2").val("");
                $("#perilaku6").val("");
                $("#kedisiplinan6").val("");
                $("#kreatifitas6").val("");
                $("#jumlah3").val("");
                $("#prioritas3").val("");
               //FORM PERHITUNGAN MATRIK PENJUMLAHAN SETIAP BARIS KRITERIA
                $("#kedisiplinan7").val("");
                $("#kreatifitas7").val("");
                $("#perilaku7").val("");
                $("#jumlah4").val("");
                $("#kreatifitas8").val("");
                $("#perilaku8").val("");
                $("#kedisiplinan8").val("");
                $("#jumlah5").val("");
                $("#perilaku9").val("");
                $("#kedisiplinan9").val("");
                $("#kreatifitas9").val("");
                $("#jumlah6").val("");
               //FORM PERHITUNGAN CR KRITERIA
                $("#jmlbaris1").val("");
                $("#prioritas4").val("");
                $("#hasil1").val("");
                $("#jmlbaris2").val("");
                $("#prioritas5").val("");
                $("#hasil2").val("");
                $("#jmlbaris3").val("");
                $("#prioritas6").val("");
                $("#hasil3").val("");
                $("#Total").val("");              
               //HASIL CR/NILAI INDEKS RANDOM KRITERIA
                $("#Jumlahλmaxx").val("");
                $("#λmaxn").val("");
                $("#CIIR").val("");        
               
            }
				
				function ValidasiNumber() {
                var regex = /\D/;
                var txt = document.getElementById('kreatifitas1').value;
                if(regex.test(txt)){
                    alert('Maaf, data harus berupa angka...!');
                    document.getElementById('kreatifitas1').focus();
                    return false;
                } 
                txt = document.getElementById('perilaku1').value;
                if(regex.test(txt)){
                    alert('Maaf, data harus berupa angka...!');
                    document.getElementById('perilaku1').focus();
                    return false;
                }
                txt = document.getElementById('kedisiplinan2').value;
                if(regex.test(txt)){
                    alert('Maaf, data harus berupa angka...!');
                    document.getElementById('kedisiplinan2').focus();
                    return false;
                }
                return true;
            }
           
           function validasi_test(subkriteria){
              if (subkriteria.kreatifitas1.value == ""){
                alert("Maaf, data harus di isi terlebih dahulu...!");
                subkriteria.kreatifitas1.focus();
                clearText()
                return (false);
              }
              if (subkriteria.perilaku1.value == ""){
                alert("Maaf, data harus di isi terlebih dahulu...!");
                subkriteria.perilaku1.focus();
                clearText()
                return (false);
              }   
              if (subkriteria.kedisiplinan2.value == ""){
                alert("Maaf, data harus di isi terlebih dahulu...!");
                subkriteria.kedisiplinan2.focus();
                clearText()
                return (false);
              }   
              return (true);
            } 
            
             function ValidasiForm(subkriteria){
              if (subkriteria.kreatifitas1.value == ""){
                alert("Maaf, data harus di isi terlebih dahulu. Jika ingin melanjutkan proses perhitungan..!");
                subkriteria.kreatifitas1.focus();
                return (false);
              } 
              return (true);
            } 
				
			 function Save(){
				 if (ValidasiForm(subkriteria)==false){    
                            }else if (ValidasiForm(subkriteria)==true){
					 
               					var parameter = "action=Save Current Sub Kriteria perilaku"  +
                                "&Kd_Sub_Kriteria7=28" +
                                "&Kd_Kriteria3=3" +
                                "&hasil1=" + $("#hasil1").val () +
                                
                                "&Kd_Sub_Kriteria8=29" +
                                "&Kd_Kriteria3=3" +
                                "&hasil2=" + $("#hasil2").val () +
                                
                                "&Kd_Sub_Kriteria9=30" +
                                "&Kd_Kriteria3=3" +
                                "&hasil3=" + $("#hasil3").val () ;
                            
                               //alert (parameter);
                               
                            $.ajax({
                                type: "POST",
                                cache: "false",
                                url: "proses_penilaian_antar_subkriteria_perilaku.php",
                                data: parameter,
                                success: function(result){
                                    alert(result);
                                }
                            });
							}
					
			}
         </script> 
         
         
         
    </head>
    <body>
        <div id="container">
            <div id="header">
            
                <center>
                    <br>
                    PENILAIAN DAN PERHITUNGAN SUB KRITERIA PERILAKU<br>
                </center>
                
            </div>
            <div id="menu">
            
                <!-- Menu Bagian Kiri -->
                 <ul class="dropdown dropdown-horizontal">
                    <li><a class="dir" style="cursor: pointer">Pembobotan</a>
                        <ul>
                            <li><a href="penilaian_antar_kriteria.php">Kriteria</a></li>
                            <li><a href="penilaian_antar_Subkriteria_kedisiplinan.php">Subkriteria kedisiplinan</a></li>
                            <li><a href="penilaian_antar_Subkriteria_kreatifitas.php">Subkriteria kreatifitas</a></li>
                            <li><a href="penilaian_antar_Subkriteria_perilaku.php">Subkriteria perilaku</a></li>
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
            
            <form id="subkriteria">
            <div style="margin-left:733px;">
          	<button class="ui-state-default ui-corner-all" id="btnInfoNilai" name="btnInfoNilai" type="button" 
            style="height: 40px; width: 160px;"><b>Info Penilaian Karyawan<b></button>
            
            </div> 
            <table style="margin-top:15px; margin-left:42px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td colspan="2" style="text-align:center;"><b>JUMLAH SUB KRITERIA</b></td> 
                </tr>
                <td width="835"><label style="margin-left:375px;"></label><input type="text" 
                 				style="text-align:center;" id="JmlNilaiKriteria" name="" size="10" value="3" readonly="">
                </td>
                </tr>
            </thead>
            </table>
            <br><br>
            <div id="line" style="width:855px;"><b>PERBANDINGAN BERPASANGAN</b></div>
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Baik</b></td> 
                    <td style="text-align:center;"><b>Cukup</b></td>
                    <td style="text-align:center;"><b>Kurang</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Baik</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kedisiplinan1" name="" size="10" 
                     value="1" readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kreatifitas1" name="" size="10"></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="perilaku1" name="" size="10">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Cukup</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kreatifitas2" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="perilaku2" name="" size="10" 
                    value="1" readonly=""></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kedisiplinan2" name="" size="10"></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Kurang</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="perilaku3" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kedisiplinan3" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="kreatifitas3" name="" size="10" 
                    value="1" readonly=""></td>
                </tr>
                <tr>
                	<td width="200px" style="text-align:left;"><b>Jumlah</b></td>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahkedisiplinan" name="" size="10" readonly="">
                    </td> 
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahkreatifitas" name="" size="10" readonly="">
                    </td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jumlahperilaku" name="" size="10" readonly="">
                    </td>
                </tr>
                </thead>
            </table>
            <div id="line" style="width:855px;"></div>
            <br><br>
            <div id="line" style="width:855px;"><b>MATRIKS NILAI SUB KRITERIA perilaku</b></div>
            
             <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
             <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Baik</b></td> 
                    <td style="text-align:center;"><b>Cukup</b></td>
                    <td style="text-align:center;"><b>Kurang</b></td>
                    <td style="text-align:center;"><b>Jumlah</b></td>
                    <td style="text-align:center;"><b>Prioritas</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Baik</b></td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kedisiplinan4" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kreatifitas4" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="perilaku4" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="jumlah1" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="prioritas1" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Cukup</b></td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kreatifitas5" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="perilaku5" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kedisiplinan5" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="jumlah2" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="prioritas2" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Kurang</b></td>
                    <td width="140px">  
                    <label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="perilaku6" name="" size="10" readonly="">
                    </td> 
                    <td width="140px">
                    <label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kedisiplinan6" name="" size="10" readonly="">
                    </td>
                    <td width="140px">
                    <label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="kreatifitas6" name="" size="10" readonly="">
                    </td>
                    <td width="140px">
                    <label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="jumlah3" name="" size="10" readonly="">
                    </td>
                    <td width="145px">
                    <label style="margin-left:25px;"></label><input type="text" style="text-align:center;" id="prioritas3" name="" size="10" readonly="">
                    </td>
                </tr>
                </thead>
            </table>
            
            <div id="line" style="width:855px;"></div>
            <br><br>
            <div id="line" style="width:855px;"><b>PENJUMLAHAN SETIAP BARIS SUB KRITERIA perilaku</b></div>
            
             <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
             <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Baik</b></td> 
                    <td style="text-align:center;"><b>Cukup</b></td>
                    <td style="text-align:center;"><b>Kurang</b></td>
                    <td style="text-align:center;"><b>Jumlah</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Baik</b></td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kedisiplinan7" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kreatifitas7" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="perilaku7" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="jumlah4" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Cukup</b></td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kreatifitas8" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="perilaku8" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kedisiplinan8" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="jumlah5" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Kurang</b></td>
                    <td width="180px">  
                    <label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="perilaku9" name="" size="10" readonly="">
                    </td> 
                    <td width="180px">
                    <label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kedisiplinan9" name="" size="10" readonly="">
                    </td>
                    <td width="180px">
                    <label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="kreatifitas9" name="" size="10" readonly="">
                    </td>
                    <td width="180px">
                    <label style="margin-left:50px;"></label><input type="text" style="text-align:center;" id="jumlah6" name="" size="10" readonly="">
                    </td>
                </tr>
                </thead>
            </table>
            
            <div id="line" style="width:855px;"></div>
            <br><br>
            <div id="line" style="width:855px;"><b>PERHITUNGAN RASIO KONSISTENSI SUB KRITERIA perilaku</b></div>
            
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><b>Jumlah Perbaris</b></td> 
                    <td style="text-align:center;"><b>Prioritas</b></td>
                    <td style="text-align:center;"><b>Hasil</b></td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Baik</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jmlbaris1" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="prioritas4" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="hasil1" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;"><b>Cukup</b></td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jmlbaris2" name="" size="10" readonly="">
                    </td> 
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="prioritas5" name="" size="10" readonly="">
                    </td>
                    <td><label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="hasil2" name="" size="10" readonly="">
                    </td>
                </tr>
                <tr>
                	<td width="200px" style="text-align:left;"><b>Kurang</b></td>
                    <td width="200px">  
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="jmlbaris3" name="" size="10" readonly="">
                    </td> 
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="prioritas6" name="" size="10" readonly="">
                    </td>
                    <td width="200px">
                    <label style="margin-left:60px;"></label><input type="text" style="text-align:center;" id="hasil3" name="" size="10" readonly="">
                    </td>
                </tr>
                 <tr>
                	<td width="200px" style="text-align:left;"><b>TOTAL</b></td>
                    <td><td>
                    <td width="200px">  
                    <label style="margin-left:55px;"></label><input type="text" style="text-align:center; font-weight:bold;" id="Total" name="" size="10"
                     readonly="">
                    </td>       
                </tr>
                </thead>
            </table> 
            
            <div id="line" style="width:855px;"></div>
            <br><br>
            
            <table style="margin-top:15px; margin-left:40px; margin-right:40px; margin-bottom:5px; width:855px;">
            <thead class="ui-state-default">
                <tr>
                    <td style="text-align:center;"><b>λ max = (Jumlah/n)</b></td> 
                    <td style="text-align:center;"><b>IR = (Indeks Random)</b></td>
                    <td style="text-align:center;"><b>CI = ( λ max – n)/n</b></td>
                </tr>
                <tr style="text-align:center;">
                    <td><input type="text" style="text-align:center; font-weight:bold;" id="Jumlahλmaxx" name="" size="10" readonly=""></td> 
                    <td><input type="text" style="text-align:center;" id="IndeksRandom" name="" size="10" value="0.58 " readonly=""></td> 
                    <td><input type="text" style="text-align:center; font-weight:bold;" id="λmaxn" name="" size="10" readonly=""></td> 
                </tr> 
            </thead>
            </table> 
         
            <table style="margin-top:15px; margin-left:42px; margin-right:40px; margin-bottom:5px;">
            <thead class="ui-state-default">
                <tr>
                    <td colspan="2" style="text-align:center;"><b>CR = CI/IR </b></td> 
                </tr>
                <td width="835"><label style="margin-left:375px;"></label>
                <input type="text" style="text-align:center; font-weight:bold;" id="CIIR" name="" size="10" readonly=""></td>    
            </thead>
            </table>  
          
            
            
            <br><br>
          	<div style="margin-left:670px;">
           			<button class="ui-state-default ui-corner-all"  type="button" onClick="Bagi1 (),Bagi2 (), Bagi3 (), Jumlah1 (), Jumlah2 (), Jumlah3 (), BagiJmlkedisiplinan1 (), BagiJmlkedisiplinan2 (), BagiJmlkedisiplinan3 (), BagiJmlkreatifitas1(), BagiJmlkreatifitas2(), BagiJmlkreatifitas3(), BagiJmlperilaku1(), BagiJmlperilaku2 (),BagiJmlperilaku3 (), JumlahAkhir1 (), JumlahAkhir2 (), JumlahAkhir3 (), JmlPrioritas1(), JmlPrioritas2 (), JmlPrioritas3 (), PerkalianMatrixNilai (), PerkalianMatrixNilai2 (), PerkalianMatrixNilai3 (), PerkalianMatrixNilai4 (), PerkalianMatrixNilai5 (), PerkalianMatrixNilai6 (), PerkalianMatrixNilai7 (), PerkalianMatrixNilai8 (), PerkalianMatrixNilai9 (),JumlahBarisKriteria1 (), JumlahBarisKriteria2 (), JumlahBarisKriteria3 (), RasioKonsistenasiKriteria1 (), RasioKonsistenasiKriteria2 (), RasioKonsistenasiKriteria3 (), RasioKonsistenasiKriteria4 (), RasioKonsistenasiKriteria5 (), RasioKonsistenasiKriteria6 (), JmlRasioKonsistenasiKriteria1 (), JmlRasioKonsistenasiKriteria2 (), JmlRasioKonsistenasiKriteria3 (), TotalPerhitunganRasioKriteria (), TotalPerhitunganJumlahλmaxx (), TotalPerhitunganCI (), TotalPerhitunganCR ()"id="btnLogin" name="btnLogin" style="height: 30px; width: 70px;">Proses</button>
                    
                    <button class="ui-state-default ui-corner-all" id="btnSimpan" type="button" name="btnSimpan" onClick="Save()"
                    style="height: 30px; width: 70px;">Save</button>
                    <button class="ui-state-default ui-corner-all" id="btnRefresh" type="button" name="btnRefresh" onClick="clearText()"
                    style="height: 30px; width: 70px;">Refresh
                    </button>
             </div>
      		</form>
            </div>
            
             <div id="frmInfoNilai">
                    <br>
                    <legend style="width: 670px; height: 20px; padding-top: 10px; padding-bottom: 10px;" 
                    class="ui-widget ui-widget-header ui-corner-all"><center>TABEL SEKALA PENILAIAN PERBANDINGAN BERPASANGAN</center></legend> 
                    <table width="670" border="0" cellpadding="4" cellspacing="0">                    
                            <thead class="ui-state-default">
                                <tr>
                                    <td style="text-align: center; width:100px; height:33px;">Intensitas Kepentingan</td>                           
                                    <td style="width:400px;" >Keterangan</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center; height:10px;">1</td>
                                    <td>Kedua elemen sama pentingnya</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; height:10px;">3</td>
                                    <td>Elemen yang satu sedikit lebih penting daripada elemen yang lainnya</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; height:10px;">5 </td>
                                    <td>Elemen yang satu lebih penting daripada yang lainnya</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; height:10px;">7</td>
                                    <td>Satu elemen jelas lebih mutlak penting daripada elemen lainnya</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; height:10px;">9</td>
                                    <td>Satu elemen mutlak penting daripada elemen lainnya </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; height:10px;">2,4,6,8</td>
                                    <td>Nilai-nilai antara dua nilai pertimbangan-pertimbangan  yang berdekatan</td>
                                </tr>
                            </thead>
                        </table>
                    <div id="line1"></div>
                    <br>
                        <legend style="width: 670px; height: 20px; padding-top: 10px; padding-bottom: 10px;" 
                        class="ui-widget ui-widget-header ui-corner-all"><center>TABEL NILAI INDEX RANDOM</center></legend> 
                    
                    <form>                                                                                                                                            
                        <table cellpadding="2" cellspacing="0">
                            <thead class="ui-state-default">
                                <tr>
                                    <td style="text-align: center; width:100px; height:50px;">Ukuran Matriks</td>
                                    <td style="text-align: center; width:30px;">1,2</td>
                                    <td style="text-align: center; width:30px;">3</td>
                                    <td style="text-align: center; width:30px;">4</td>
                                    <td style="text-align: center; width:30px;">5</td>
                                    <td style="text-align: center; width:30px;">6</td>
                                    <td style="text-align: center; width:30px;">7</td>
                                    <td style="text-align: center; width:30px;">8</td>
                                    <td style="text-align: center; width:30px;">9</td>
                                    <td style="text-align: center; width:30px;">10</td>
                                    <td style="text-align: center; width:30px;">11</td>
                                    <td style="text-align: center; width:30px;">12</td>
                                    <td style="text-align: center; width:30px;">13</td>
                                    <td style="text-align: center; width:30px;">14</td>
                                    <td style="text-align: center; width:30px;">15</td>  
                                </tr>
                                <tr>
                                    <td style="text-align: center; width:100px; height:50px;">Nilai RI</td>                           
                                    <td style="text-align: center; width:20px;">0,00</td>
                                    <td style="text-align: center; width:20px;">0,58</td>
                                    <td style="text-align: center; width:20px;">0,90</td>                                
                                    <td style="text-align: center; width:20px;">1,12</td>
                                    <td style="text-align: center; width:20px;">1,24 </td>
                                    <td style="text-align: center; width:20px;">1,32</td>
                                    <td style="text-align: center; width:20px;">1,41</td>
                                    <td style="text-align: center; width:20px;">1,45</td>
                                    <td style="text-align: center; width:20px;">1,49</td>
                                    <td style="text-align: center; width:20px;">1,51</td>
                                    <td style="text-align: center; width:20px;">1,48</td>
                                    <td style="text-align: center; width:20px;">1,56</td>
                                    <td style="text-align: center; width:20px;">1,57</td>
                                    <td style="text-align: center; width:20px;">1,59</td>
                               </tr>
                            </thead>
                        </table>
                        <div id="line1"></div>
                    </form>                
                </div>
            
             <!-- Menu Bagian Bawah -->
            <div id="footer">
            PT. Maretska Kirana Technologies</a> ©2011.<br>Version 1.0
            </div>
        </div>
    </body>
</html>
