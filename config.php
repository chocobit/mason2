<?php
	@header( 'Pragma: no-cache' );
	@header( 'Content-Type:text/html; charset=utf-8');
	date_default_timezone_set('Asia/Bangkok');
	error_reporting(1);
	$config['page_title'] = "Abie Tiger";
	$config['web_name'] = "Abie Tiger";
	$config['ip_address'] = ipCheck();
	$config['date_now'] = date('Y-m-d H:i:s');
	//$config['referrer_page'] = (@eregi($_SERVER["HTTP_HOST"], str_replace("www.", "", strtolower($_SERVER["HTTP_REFERER"])))) ? 1 : 0; //[1]=yes / [0]=no
	$config['referrer_page'] = (preg_match("/".$_SERVER["HTTP_HOST"]."/", str_replace("www.", "", strtolower($_SERVER["HTTP_REFERER"])))) ? 1 : 0;
	$config['base_path'] 		= "http://www.toa-chugoku.com/";
	$config['base_path_ssl'] 	= "http://www.toa-chugoku.com/";	
	
	 // $config['base_path'] 		= "http://localhost/toa-chugoku/";
	 // $config['base_path_ssl'] 	= "http://localhost/toa-chugoku/";
	
	/*Database Connect *************************************************************/
	// Offline : localhost
	 // define("HostName","localhost");
	 // define("DBName","toa_db");
	 // define("DBUsername","root");
	 // define("DBPassword",""); 

	 
	 include('backoffice/database.php');

	// Open the base (construct the object):
	$db = new DBMS(DBServer, HostName, DBName, DBUsername, DBPassword,"");
	$dbCN = $db->ConDB();
	/*
	if($dbCN==fales) 
	{
		echo ("Error: Cant connect to database.\n");
	}
	else
	{
		echo ("Connect to database.\n");
	}*/
	
	// Admin Config
	// $adm_id = $_SESSION['ssAdminPremissionsID'];
	// $result = $db->query("SELECT * FROM tbl_admin WHERE admin_id='{$adm_id}'");
	// $line = $db->fetchNextObject($result);
	// $PM_NAME = $line->name;
	// $PM_POSITION = $line->position;

	$Arr_Main_Menu  = array('homeIndex' => "index.php?op=home-index",
							'aboutIndex' => "index.php?op=about-index",
							'contactIndex' => "index.php?op=contact-index",
							'projectIndex' => "index.php?op=project-index",
							'projectDetail' => "index.php?op=project-detail",
							'jobIndex' => "index.php?op=job-index",
							'downloadIndex' => "index.php?op=download-index",
							'contactIndex' => "index.php?op=contact-index",
							'downloadIndex' => "index.php?op=download-index",
							'storeIndex' => "index.php?op=store-index",
							'productIndex' => "index.php?op=product-index",
							'productDetail' => "index.php?op=product-detail",
							'newsIndex' => "index.php?op=news-index"

							);

if ($_SESSION['lang'] == "") {
	$_SESSION['lang'] = "en";
}

?>