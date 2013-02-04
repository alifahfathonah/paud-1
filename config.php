<?php
/*********************************
 * Site Configuration
 * Author   : Farel Java
 * Version  : 0.0.1
 *********************************/

//Error Reporting
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors',true);
 
//Database Configuration 
$db= array(
    "hostname"  => 'localhost',
    "database"  => 'pauddb',
    "user"      => 'root',
    "pass"      => ''
);

//Path Configuration
define('ROOT',dirname(__FILE__));
define('IMG_FOLDER',ROOT."/images");
define('MATERIAL_FOLDER',ROOT."/materi");
define('JS_FOLDER',ROOT."/js");
define('CSS_FOLDER',ROOT."/css");
define('SYS_FOLDER',ROOT."/system");

//Admin Path
define('ADMIN_FOLDER',ROOT."/admin");


//URL Configuration
define('URL_ADDR','http://'.$_SERVER['HTTP_HOST']."/paud");
define('IMG_ADDR',URL_ADDR."/images");
define('MATERIAL_ADDR',URL_ADDR."/materi");
define('JS_ADDR',URL_ADDR."/js");
define('CSS_ADDR',URL_ADDR."/css");
define('SYS_ADDR',URL_ADDR."/system");

//Admin Configuration
define('ADMIN_ADDR',URL_ADDR."/admin");

require_once SYS_FOLDER."/functions.php"; 
require_once SYS_FOLDER."/database.php";

$database = new database(); 
?>