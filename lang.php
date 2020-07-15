<?php 
session_start();

if($_REQUEST['lang']=="th"){

	$_SESSION['lang'] = "th";
}

if($_REQUEST['lang']=="en"){
	$_SESSION['lang'] = "en";
}	

?>