<?php
header ('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
require("function.php");
//require_once("../../src/class.database.connection.php");
//require_once("../../src/tcp.database.class.php");
//require('../config.php');
require("tcp.database.class.php");
include('database.php');

$db = new DBMS(DBServer, HostName, DBName, DBUsername, DBPassword,"");
$dbCN = $db->ConDB(); //This step is really neccesary for create connection to database, and getting the errors in methods.
if($dbCN==false) die("Error: Cant connect to database.");
echo $db->getError(); //Show error description if exist, else is empty.



$query	  	= "SELECT sequence FROM tbl_product_category 
							WHERE product_category_id > 0
							ORDER BY sequence ASC, update_time DESC , create_time DESC 
							LIMIT 7,1 
						";


$result = $db ->query($query,'count');
/*
foreach ($result as $line){
	$sequence = $line ->sequence;
	echo "Sequence is : $sequence \n";
}*/
echo "Count row : ".$result;



$MaxSeq = (int)$db->query("SELECT MAX(sequence) FROM tbl_product_category",'count');
$res = $MaxSeq+1;
echo "MaxSequence is : $res \n";


$product_category_id	= $db->getLatestId('tbl_product_category','product_category_id');
echo "product_category_id is : $product_category_id \n";

//echo "MaxSequence is : $lines \n";


/*
$result = $db->query_first("SELECT active FROM tbl_product_category WHERE product_category_id = 30");
$active = $result ->active;
echo "Result is : $active   " ;
$active = ($active == 0) ? 1 : 0;
echo "Result is : $active   " ;
$db->execute("UPDATE tbl_product_category SET active = {$active} WHERE product_category_id = 30");
echo "Result is : $active  " ;
*/
//$rs = $db->query_first("SELECT username,update_ip FROM tbl_admin where username = 'admin'");
//foreach($rs as $row){
	//$tmp_name = $rs["username"];
	//$tmp_address = $rs["update_ip"];
	//echo "The user $tmp_name lives in: $tmp_address<br/>";
//}

//But if you need retrieve rows in objects, not in array... you need specify like this...
//$rs = $db->query("SELECT * FROM tbl_admin");


//$rs->setFetchMode(PDO::FETCH_OBJ); // <---- This is most important!
//foreach($rs as $row){
	//$tmp_name = $rs['admin_id'];
	//$tmp_address = $rs['username'];
	//echo "The user $tmp_name lives in: $tmp_address<br/>";
	
//}

/*
	$username	=	'admin';
	$password	=	'admin';
	$MemberAccess = $db->query_single("SELECT COUNT(admin_id) FROM tbl_admin WHERE MD5(username) = '" .md5($username) ."' AND (password) = '" .md5($password). "' ");
	if($MemberAccess==1){ 
		$admin_id = $db->query_first("SELECT admin_id FROM tbl_admin WHERE MD5(username) = '" .md5($username) ."' AND (password) = '" .md5($password). "' ");
		$position = $db->query_first("SELECT position FROM tbl_admin WHERE MD5(username) = '" .md5($username) ."' AND (password) = '" .md5($password). "' ");
		
		$_SESSION['ssAdminPremissionsID'] 	= $admin_id;
		$_SESSION['ssAdminPremissions'] 	= $position;

        echo "y";
	}else{ 
		unset($_SESSION['ssAdminPremissionsID']);
		unset($_SESSION['ssAdminPremissions']);
		echo "n";
	}

*/


$rs = null;
$db->disconnect();
?>