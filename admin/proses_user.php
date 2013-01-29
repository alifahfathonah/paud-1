<?php
include '../connection/koneksi.php';

$action = isset($_POST['action']) ? ($_POST['action']) : '';

switch ($action){
    case 'Add New User':{
        $xID            = $_POST['xID'];
        $Username  		= $_POST['Username'];
        $Password       = $_POST['Password'];
        $Status         = $_POST['Status'];

        $queryInsert    = "INSERT INTO `user`
                           (username, password, status) VALUES
                           ('$Username', '$Password', '$Status')";
        $resultInsert   = mysql_query($queryInsert);

        if ($resultInsert){
            echo "Data user berhasil disimpan";
        }else{
            echo "Saved record failed " . mysql_error();
        }
        
        break;
    }

    case 'Edit Current User':{
        $xID            = $_POST['xID'];
        $Username       = $_POST['Username'];
        $Password       = $_POST['Password'];
        $Status         = $_POST['Status'];

        $queryUpdate    = "UPDATE `user` SET
                           `username` = '$Username', `password` = '$Password', status = '$Status'
                           WHERE kd_user = '$xID'";
        $resultUpdate   = mysql_query($queryUpdate);

        if ($resultUpdate){
            echo "Data berhasil di update";
        }else{
            echo "Update record failed " . mysql_error();
        }
        
        break;
    }

    case 'deleteUser':{
        $xID = $_POST['xID'];
        
        $queryDelete    = "DELETE FROM `user` WHERE kd_user = '$xID'";
        $resultDelete   = mysql_query($queryDelete);

        if ($resultDelete){
            echo "Delete record successfully";
        }else{
            echo "Delete record failed " . mysql_error();
        }
        
        break;
    }

    case 'refreshUser':{
        $querySelect    = "SELECT * FROM `user` ORDER BY `username` ASC";
        $resultSelect   = mysql_query($querySelect);

        while ($tabel = mysql_fetch_array($resultSelect)){
            echo "<tr id=\"$tabel[kd_user]\">
                     <td width=\"0\" style=\"display: none\">$tabel[kd_user]</td>
                     <td width=\"150\" align=\"left\" style=\"border-right: 1px solid #fff; border-left: 1px solid #fff;\">$tabel[username]</td>
                     <td width=\"0\" style=\"display: none\">$tabel[password]</td>
					 <td width=\"100\" align=\"left\" style=\"border-right: 1px solid #fff; border-left: 1px solid #fff;\">$tabel[status]</td>
                     <td width=\"125\" align=\"center\" style=\"border-right: 1px solid #fff; border-left: 1px solid #fff;\">
                        <a href=\"javascript:editUser($tabel[kd_user])\"><img src='images/document-edit.png'width=\"25px\"></a> |
                        <a href=\"javascript:deleteCurrUser($tabel[kd_user])\"><img src='images/edit_delete_shred.png'width=\"25px\"></a>
                     </td>
                 </tr>";
        }
    }
    
    default :
}
?>

