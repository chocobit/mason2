<?php

/*
* Web-Based Instruction PHP Programming :: NetdesignRank (Thailand)
* Web-Design ::  NetdesignRank (Thailand )
* Copyright (C) 2007-2012
* Contact :: support@netdesignrank.com 
* This is the integration file for PHP (versions 5)
*/
@ob_start();
@session_start();
//require_once("backoffice/src/class.database.connection.php");
require_once('backoffice/src/tcp.database.class.php');
require_once('backoffice/src/function.php');
require_once('backoffice/src/func.sql.php');
require_once('config.php');
require_once('managepage.php');
require_once("backoffice/src/class.pagination.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv='content-language' content='th' />
	<meta http-equiv='content-type' content='text/html; charset=UTF-8?' />
	<meta name='revisit-after' content='7 days' />

	<META NAME='KEYWORDS' CONTENT='ใส่คำสำคัญ'/>
	<META NAME='DESCRIPTION' CONTENT='ใส่เนื้อหาเกี่ยวกับเว็บไซต์'/>

	<meta property="og:url"                content="http://www.masonacoustics.com" />
	<meta property="og:type"               content="Abie Tiger" />
	<meta property="og:title"              content="COMPANY PROFILE" />
	<meta property="og:description"        content="Mason Acoustics has two modern factories located on the 69,000 square meters and 55,000 square meters. Both of Mason Acoustics factories estate at Kabinbury where is approximately two hours from Bangkok. The complex includes the test Mason Acoustics Facilities facilities, a training center with a 40 seat lecture hall for staff and customers and the R&D and design offices. The facility has been set up to manufacture export quality products and is staffed by skilled workers who are supervised by experienced factory engineers." />
	<meta property="og:image"              content="http://www.masonacoustics.com/images/LOGO_ABIE TIGER.png" />


	<title><?php echo $config['page_title'];?></title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="vendor/animateit/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Vendor css -->
	<link href="vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Template base -->
	<link href="css/theme-base.css" rel="stylesheet">

	<!-- Template elements -->
	<link href="css/theme-elements.css" rel="stylesheet">	
	
	<!-- Responsive classes -->
	<link href="css/search.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/style.css">
	<link href="css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- LOAD GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" property="stylesheet" href="vendor/rs-plugin/css/settings.css" type="text/css" media="all" />

	<!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />

    <!-- side bar-->
     <link href="pages/sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pages/sidebar/css/simple-sidebar.css" rel="stylesheet">


	<?php if(file_exists($config['css'])){ echo '<link href="' .$config['css']. '" rel="stylesheet" type="text/css" />';} ?>

    <!--VENDOR SCRIPT-->
    <script src="vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="vendor/plugins-compressed.js"></script>
    
	<?php if(file_exists($config['javas'])){ echo '<script type="text/javascript" src="' .$config['javas']. '" ></script>';} ?>
	<?php if(file_exists($config['func'])){ require_once($config['func']);} ?>

<!-- gray scale
<style>
	html{
		filter:grayscale(90%)!important;
	}
</style>
-->
</head>

<body class="wide">	
	<!-- WRAPPER -->
	<div class="wrapper">
	

		<!-- start: Header -->
		<?php /*include('include/inc.header.php'); */?>
		
		<!-- start: Header -->
		<?php /*include('include/inc.main_menu.php'); */?>	
		<!-- start: Content -->
		
		<?php require_once($config['page']); ?>
		<!-- END: Content -->

		<!-- start: Footer
		<?php /*include('include/inc.footer.php'); */?> -->
		<!-- End: Footer -->
	</div>
	<!-- END: WRAPPER -->

	<!-- start: JavaScript-->
	
	<!-- end: JavaScript-->

	<!-- GO TOP BUTTON -->
	<!--<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>-->

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme-functions.js"></script>

<!-- Custom js file -->
<script src="js/classie.js"></script>
<script src="js/search.js"></script>
<script src="js/custom.js"></script>
<script src="js/index.js"></script>


</html>