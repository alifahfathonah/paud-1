<?php
 include "../../connection/koneksi.php";

$action = isset($_POST['action']) ? ($_POST['action']) : '';

$Kd_Sub_Kriteria7   = $_POST['Kd_Sub_Kriteria7'];
$Kd_Kriteria3       = $_POST['Kd_Kriteria3'];
$hasil1             = $_POST['hasil1'];
$Kd_Sub_Kriteria8   = $_POST['Kd_Sub_Kriteria8'];
$Kd_Kriteria3       = $_POST['Kd_Kriteria3'];
$hasil2             = $_POST['hasil2'];
$Kd_Sub_Kriteria9   = $_POST['Kd_Sub_Kriteria9'];
$Kd_Kriteria3       = $_POST['Kd_Kriteria3'];
$hasil3             = $_POST['hasil3'];


	
switch ($action){
    case 'Save Current Sub Kriteria Ketahanan': 

        $queryUpdate1    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria3',
                        	hasil          = '$hasil1'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria7'";  
		
				
		
        $resultUpdate   = mysql_query($queryUpdate1);

        if ($resultUpdate){
            echo "Save record successfully";
        }else{
			echo "Error" . mysql_error();
            echo "Update record failed " . mysql_error();
        }
        
		
		
		 $queryUpdate2    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria3',
                        	hasil          = '$hasil2'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria8'"; 
		
		
        $resultUpdate   = mysql_query($queryUpdate2);
		

        if ($resultUpdate){
            //echo "Update record successfully";
        }else{
			echo "Error" . mysql_error();
            echo "Update record failed " . mysql_error();
        }
        
	
		 $queryUpdate3    = "UPDATE  sub_kriteria SET
                          	Kd_Kriteria    = '$Kd_Kriteria3',
                        	hasil          = '$hasil3'                             
                        	WHERE Kd_Sub_Kriteria = '$Kd_Sub_Kriteria9'"; 
		
		
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

