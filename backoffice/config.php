<?php
	@header( 'Pragma: no-cache' );
	@header( 'Content-Type:text/html; charset=utf-8');
	date_default_timezone_set('Asia/Bangkok');
	error_reporting(0);
	//require_once("../../src/function.php");
	$config['page_title'] = "BACKOFFICE";
	$config['web_name'] = "Mason Acoustics";
	$config['ip_address'] = ipCheck();
	$config['date_now'] = date('Y-m-d H:i:s');
	$config['referrer_page'] = (@preg_match($_SERVER["HTTP_HOST"], str_replace("www.", "", strtolower($_SERVER["HTTP_REFERER"])))) ? 1 : 0; //[1]=yes / [0]=no
	$config['base_path'] 		= "http://www.masonacoustics.com/";
	$config['base_path_ssl'] 	= "http://www.masonacoustics.com/";
	//$config['base_path'] 		= "http://evaii/tcp/";
	//$config['base_path_ssl'] 	= "http://evaii/tcp/";
	
	/*Database Connect *************************************************************/
	// Offline : localhost
	//  define("HostName","10.1.1.60");
	//  define("DBName","toa-chugoku_db");
	//  define("DBUsername","toa-chugoku_db");
	//  define("DBPassword","t&Sd4t15@2"); 

	 
	include('database.php');

	// Open the base (construct the object):
	//$db = new DB(DBName, HostName, DBUsername, DBPassword);
	$db = new DBMS(DBServer, HostName, DBName, DBUsername, DBPassword,"");
	$dbCN = $db->ConDB();
	/*
	/*if($dbCN==fales) 
	{
		echo ("Error: Cant connect to database.\n");
	}
	else
	{
		echo ("Connect to database.\n");
	}*/

	/*
	// Admin Config
	if(!isset($_SESSION['ssAdminPremissionsID'])){
		$adm_id = $_SESSION['ssAdminPremissionsID'];
	}
	else {
        $adm_id = 0;
	}
	
	$link = mysqli_connect( HostName, DBUsername, DBPassword ,DBName) or die('Server connection not possible.-->conn2');
	if ($result = $link->query("SELECT * FROM tbl_admin where  admin_id= '{$adm_id}'")){
		//printf("Select returned %d rows.\n", $result->num_rows);
       $line = $link->fetchNextObject($result);
	
     // free result set 
    	$result->close();
    }
*/
    $adm_id =$_SESSION['ssAdminPremissionsID'];
    //echo "Session ".$adm_id;
    $result = $db->query_first("SELECT * FROM tbl_admin WHERE admin_id = $adm_id");
	//$line = $db->fetchNextObject($result);
	//foreach($result as $row){
			$PM_NAME = $result->name;
			$PM_POSITION = $result->position;
			//echo (" :  $PM_NAME and  $PM_POSITION  :");
  		//}
	//echo ("$PM_NAME and $adm_id go on $PM_POSITION\n");
?>