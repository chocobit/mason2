<?php
@ob_start();
@session_start();
header ('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
require_once("../../backoffice/src/function.php");
require_once("../../backoffice/src/tcp.database.class.php");
require_once('../../config.php');
include('../../backoffice/src/class.upload.php');
require_once("../../backoffice/src/func.youtube.php");
require_once('../../backoffice/src/class.inputfilter.php');
$InputFilter = new InputFilter();

/*************************************** Content Management ****************************************/
if($_REQUEST['action']=="contact_customer"){
	 
   $contact_name    = chkhtmlspecialchars(trim($_POST['contact_name']));
   $contact_email    = chkhtmlspecialchars(trim($_POST['contact_email']));
   $contact_message    = chkhtmlspecialchars(trim($_POST['contact_message']));
   $active = 0;
  
  $insert = "";;
  $insert["c_form_name"]= "'".$contact_name."'";
  $insert["c_form_email"]= "'".$contact_email."'";
  $insert["c_form_message"]= "'".$contact_message."'";
  $insert["active"]= "'".$active."'";

  $insert["create_by"]= "'".$contact_name."'";
  $insert["create_time"]= "now()";
  $insert["create_ip"]= "'".$config['ip_address']."'";  
  $insert["update_time"]= "now()";  
  $insert["update_ip"]= "'".$config['ip_address']."'";  
  

  $sql="INSERT INTO tbl_c_form(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";   
  $db->execute($sql);
  $contact_id = $db->lastInsertedId();

  
   // Re-direct to DataList
  


	
}
/*************************************** Content MANAGEMENT ****************************************/

// Close the connexion to the base:
$db->disconnect();
?>