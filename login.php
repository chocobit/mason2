<?php
/*
 * Web-Based Instruction PHP Programming ::  NetdesignRank Thailand .
 * Web-Design ::  ( Thailand ).
 * Copyright (C) 2007-2011
 * Contact :: contact@netdesignrank.com 
 * This is the integration file for PHP (All versions).
*/
@ob_start();
@session_start();
require_once("src/class.database.connection.php");
require_once('src/function.php');
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title><?php echo $config['page_title'];?></title>
  <!--
  <meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template.">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.min.css" rel="stylesheet">
  <link href="css/retina.css" rel="stylesheet">
  <!-- end: CSS -->
  

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
  <![endif]-->
  
  <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
  <![endif]-->
  
  <!-- start: Favicon and Touch Icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="ico/favicon.png">
  <!-- end: Favicon and Touch Icons --> 

  <style type="text/css">
    body{
      background-position: center;
      background-repeat: no-repeat;
      background-image: url('img/title-about1.jpg');
      background-size: cover;
     
    }
    placeholder{
      color: #555;
    }
  </style>
    
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/login.js" language="javascript" type="text/javascript"></script>

</head>

<body>
<?
     $sql = "SELECT * FROM tbl_admin ORDER BY update_time DESC";
     $result = $db->query($sql);
     $line = $db->fetchNextObject($result);
   $LAST_LOGIN_TIME = DateThai($line->update_time,"datetime_number");
?>
    <div class="container-fluid-full">
    <div class="row-fluid">
          
      <div class="row-fluid">
        <div class="login-box">
          <h2><center><!-- <img src="img/logo.png" /> -->CMS BACKOFFICE</center></h2>
          <form class="form-horizontal" action="#" method="post">
            <fieldset>
              <br>
              <input class="input-large span12" name="txt_username" id="txt_username" type="text" placeholder="Username"/>

              <input class="input-large span12" name="txt_password" id="txt_password" type="password" placeholder="Password"/>

              <div class="clearfix"></div><br>
              <a href="javascript:;" id="bt-login"  class="btn btn-primary ">Login</a>

          </form>
          <hr>
          <p class="text-error status"></p>
          <p class="help-inline">Last login <?=$LAST_LOGIN_TIME;?></p>  
        </div><!--/span-->
      </div><!--/row-->
      
        </div><!--/fluid-row-->
        
  </div><!--/.fluid-container-->

  <!-- start: JavaScript-->
  <?php require_once('include/inc.js.php'); ?>
  <!-- end: JavaScript-->
  
</body>
</html>