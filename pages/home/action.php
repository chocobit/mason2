<?php
@ob_start();
@session_start();
header ('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
require_once("../../backoffice/src/function.php");
require_once("../../backoffice/src/class.database.connection.php");
require_once('../../config.php');
include('../../backoffice/src/class.upload.php');
require_once("../../backoffice/src/func.youtube.php");
require_once('../../backoffice/src/class.inputfilter.php');
$InputFilter = new InputFilter();

if($_REQUEST['action']=="jobtype"){

	$jobtype_id = $_POST['jobtype_id'];
	
	// $orderjob = ($_SESSION['lang'] == "th") ? "ORDER BY jobtype_name_th ASC" : "ORDER BY jobtype_name_en ASC" ;

	$result = $db->query("SELECT * FROM tbl_product WHERE jobtype_id = {$jobtype_id} {$orderjob}");

	if ($_SESSION['lang'] == "th") {
		$html .= "<option selected>กรุณาเลือกผลิตภัณฑ์</option>";
	}else{

		$html .= "<option selected>Please Choice Product</option>";
	}
	while ($line = $db -> fetchNextObject($result)) {
		
		$product_name = ($_SESSION['lang'] == "th") ? $line->product_name_th : $line->product_name_en ;

		$html .= "<option value=\"$line->product_id\">$product_name</option>";
	}


	// $data = array('min' => $min,'max' => $max,'total' => $total,'solid' => $solid);

	 echo $html;

}


if($_REQUEST['action']=="type_error"){

	if ($_SESSION['lang'] == "th") {
		$html .= "<option selected>กรุณาเลือกผลิตภัณฑ์</option>";
	}else{

		$html .= "<option selected>Please Choice Product</option>";
	}
	 echo $html;
}



if($_REQUEST['action']=="Colour"){

	$product_id = $_POST['product_id'];

	$result = $db->query("SELECT * FROM tbl_product WHERE product_id = $product_id ");
	$line = $db -> fetchNextObject($result);
	$min = $line->product_micron_min;
	$max = $line->product_micron_max;
	$solid = $line->product_solid;


	$total = $max - $min; 

	if ($_SESSION['lang'] == "th") {
		$html .= "<option selected>กรุณาเลือก Micron</option>";
	}else{

		$html .= "<option selected>Please Choise Micron</option>";
	}
	
	for ($i=$min; $i<=$max ; $i++) { 
		$html.="<option>$i</option>";
		$i=$i+4;
	}


	// $data = array('min' => $min,'max' => $max,'total' => $total,'solid' => $solid);

	 echo $html;

}



?>