<?php
@ob_start();
@session_start();
header ('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
require_once("backoffice/src/function.php");
//require_once("backoffice/src/class.database.connection.php");
require_once('backoffice/src/tcp.database.class.php');
require_once('config.php');
include('backoffice/src/class.upload.php');
require_once("backoffice/src/func.youtube.php");

/*************************************** Content Management ****************************************/
if($_REQUEST['action']=="chk_lang"){
	

	$lang	= $_POST['data_id'] ;
	if ($lang == "th") {
		$_SESSION['lang'] = "th";
		echo $_SESSION['lang'];

	}else{
		$_SESSION['lang'] = "en";
		echo $_SESSION['lang'];
	}


}

if($_REQUEST['action']=="newsletter_email"){
	 
   $newsletter_email    = chkhtmlspecialchars(trim($_POST['newsletter_email']));
   $active = 0;
  
  $insert = "";
  $insert["newsletter_email"]= "'".$newsletter_email."'";
  $insert["active"]= "'".$active."'";
  $insert["create_by"]= "'".$contact_name."'";
  $insert["create_time"]= "now()";
  $insert["create_ip"]= "'".$config['ip_address']."'";  
  $insert["update_time"]= "now()";  
  $insert["update_ip"]= "'".$config['ip_address']."'";  

  $sql="INSERT INTO tbl_newsletter(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";   
  $db->execute($sql);
  $contact_id = $db->lastInsertedId();

   // Re-direct to DataList
  


	
}
/*************************************** Content MANAGEMENT ****************************************/

// Close the connexion to the base:
$db->close();
?>