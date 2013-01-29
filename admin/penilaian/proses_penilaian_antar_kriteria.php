<?php
include '../../connection/koneksi.php';

$action = isset($_POST['action']) ? ($_POST['action']) : '';

$Kd_Kriteria1		= $_POST['Kd_Kriteria1'];
$hasil1            	= $_POST['hasil1'];
$Kd_Kriteria2		= $_POST['Kd_Kriteria2'];
$hasil2 		    = $_POST['hasil2'];
$Kd_Kriteria3		= $_POST['Kd_Kriteria3'];
$hasil3		    	= $_POST['hasil3'];
		
switch ($action){
    case 'Save Current Kriteria':{  

        $queryUpdate1    = "UPDATE  kriteria SET
                           hasil = '$hasil1'
                           WHERE Kd_Kriteria = '$Kd_Kriteria1'";
		
		//echo $queryUpdate1;
		
		
        $resultUpdate   = mysql_query($queryUpdate1);

        if ($resultUpdate){
            echo "Data penilaian telah tersimpan";
        }else{
            echo "Update record failed " . mysql_error();
        }
        
		
		
		 $queryUpdate2    = "UPDATE  kriteria SET
                           hasil = '$hasil2'
                           WHERE Kd_Kriteria = '$Kd_Kriteria2'";
		
		
        $resultUpdate   = mysql_query($queryUpdate2);

        if ($resultUpdate){
            //echo "Update record successfully";
        }else{
            echo "Update record failed " . mysql_error();
        }
        
	
		 $queryUpdate3    = "UPDATE  kriteria SET
                           hasil = '$hasil3'
                           WHERE Kd_Kriteria = '$Kd_Kriteria3'";
		
		
        $resultUpdate   = mysql_query($queryUpdate3);

        if ($resultUpdate){
            //echo "Update record successfully";
        }else{
            echo "Update record failed " . mysql_error();
        }
        
        break;
    }

}
?>

