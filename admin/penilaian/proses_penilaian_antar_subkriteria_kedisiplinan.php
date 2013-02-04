<?php
 include "../../connection/koneksi.php";

$action = isset($_POST['action']) ? ($_POST['action']) : '';

$Kd_Sub_Kriteria1   = $_POST['Kd_Sub_Kriteria1'];
$Kd_Kriteria1       = $_POST['Kd_Kriteria1'];
$hasil1             = $_POST['hasil1'];
$Kd_Sub_Kriteria2   = $_POST['Kd_Sub_Kriteria2'];
$Kd_Kriteria1       = $_POST['Kd_Kriteria1'];
$hasil2             = $_POST['hasil2'];
$Kd_Sub_Kriteria3   = $_POST['Kd_Sub_Kriteria3'];
$Kd_Kriteria1       = $_POST['Kd_Kriteria1'];
$hasil3             = $_POST['hasil3'];


	
switch ($action){
    case 'Save Current Sub Kriteria Serat': 

        $queryUpdate1    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria1',
                        	hasil          = '$hasil1'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria1'";  
		
				
		
        $resultUpdate   = mysql_query($queryUpdate1);

        if ($resultUpdate){
            echo "Save record successfully";
        }else{
			echo "Error" . mysql_error();
            echo "Update record failed " . mysql_error();
        }
        
		
		
		 $queryUpdate2    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria1',
                        	hasil          = '$hasil2'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria2'"; 
		
		
        $resultUpdate   = mysql_query($queryUpdate2);
		

        if ($resultUpdate){
            //echo "Update record successfully";
        }else{
			echo "Error" . mysql_error();
            echo "Update record failed " . mysql_error();
        }
        
	
		 $queryUpdate3    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria1',
                        	hasil          = '$hasil3'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria3'"; 
		
		
        $resultUpdate   = mysql_query($queryUpdate3);
        if ($resultUpdate){
            //echo "Update record successfully";
        }else{
			echo "Error" . mysql_error();
            echo "Update record failed " . mysql_error();
        }
        
        break;
    }


?>

