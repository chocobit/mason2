<?php
$project_id = (int)($_GET['id']);

// Get Data
if (isset($_GET['id']) and $project_id > 0) {

  $DataIDTotal = $db->query_single("SELECT COUNT(project_id) FROM tbl_project WHERE project_id = {$project_id}");

  if ($DataIDTotal == 1) {

  	  $result = $db -> query_single("SELECT * FROM tbl_project WHERE project_id = {$project_id} AND active = 1");
	  $line = $result;

	  $project_name_th  = unchkhtmlspecialchars($line ->project_name_th);
	  $project_name_en  = unchkhtmlspecialchars($line ->project_name_en);

	  $project_desc_th  = unchkhtmlspecialchars($line ->project_desc_th);
	  $project_desc_en  = unchkhtmlspecialchars($line ->project_desc_en);


	  $colleft_name_th  = unchkhtmlspecialchars($line ->colleft_name_th);
	  $colleft_name_en  = unchkhtmlspecialchars($line ->colleft_name_en);

	  $colcenter_name_th  = unchkhtmlspecialchars($line ->colcenter_name_th);
	  $colcenter_name_en  = unchkhtmlspecialchars($line ->colcenter_name_en);

	  $colright_name_th  = unchkhtmlspecialchars($line ->colright_name_th);
	  $colright_name_en  = unchkhtmlspecialchars($line ->colright_name_en);

	  $colleft_desc_th  = unchkhtmlspecialchars($line ->colleft_desc_th);
	  $colleft_desc_en  = unchkhtmlspecialchars($line ->colleft_desc_en);

	  $colcenter_desc_th  = unchkhtmlspecialchars($line ->colcenter_desc_th);
	  $colcenter_desc_en  = unchkhtmlspecialchars($line ->colcenter_desc_en);

	  $colright_desc_th  = unchkhtmlspecialchars($line ->colright_desc_th);
	  $colright_desc_en  = unchkhtmlspecialchars($line ->colright_desc_en);

	  $meta_description  = unchkhtmlspecialchars($line ->meta_description);
	  $meta_title  = unchkhtmlspecialchars($line ->meta_title);
	  $meta_keyword  = unchkhtmlspecialchars($line ->meta_keyword);
  }else{

  }
  
} else {

}
?>
			
				<!-- PAGE TITLE -->
				<section id="page-title" class="page-title-extended page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('images/parallax/project.jpg');background-repeat: no-repeat;
    background-size: cover;">
					<div class="container">
						<div class="page-title col-md-12 center" data-animation="fadeInDown" data-animation-delay="300">
							<h1>Project reference</h1>
							<span>Home / Project reference <?php echo $_SESSION['lang']; ?></span>
						</div>		        
					</div>
				</section>
				<!-- END: PAGE TITLE -->

				<!-- Project detail -->
				<section  style="background-image:url('images/wood.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom;" class="background-white p-b-30">
					<div class="container">
						<h3   style="color:#ffffff;" class="center p-b-30"><?php echo $p_name = ($_SESSION['lang'] == "th") ? $project_name_th : $project_name_en;?></h3>
						<h4 ><?php echo $p_desc = ($_SESSION['lang'] == "th") ? $project_desc_th : $project_desc_en?></h4>
						<div class="row p-t-20">
							<div class="tabbable">
								<ul class="nav nav-pills nav-stacked col-xs-12 col-sm-12 col-md-3 col-sm-push-9 hidden-sm">
									<?php
										  $sql = "SELECT * FROM tbl_project 
										          WHERE project_id > 0  
										          ORDER BY sequence ASC, update_time DESC , create_time DESC ";
										    $result = $db->query($sql,'obj');
										    	foreach($result as $line){
										      $project_id_in = $line->project_id;
											  $project_name_th  = unchkhtmlspecialchars($line->project_name_th);
											   $project_name_en  = unchkhtmlspecialchars($line->project_name_en);
									?>  

									<li class="borline <?php echo $pp = ($project_id_in == $project_id) ? "active" : "" ; ?>"><a href="<?php echo $Arr_Main_Menu['projectDetail']?>&id=<?php echo $project_id_in?>"><?php echo $p_name = ($_SESSION['lang'] == "th") ? $project_name_th : $project_name_en?></a></li>
									
									
									<?php } ?>
								</ul>
								
							</div>

							<div class="tab-content col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 project-ref hidden-sm">
								<div class="tab-pane active content-ref current" id="a">
									<div class="carousel" data-carousel-col="1"> 
										<?php 
										$sql = "SELECT * FROM tbl_project_banner WHERE project_id = {$project_id}  
										          ORDER BY sequence ASC, update_time DESC , create_time DESC 
										          ";
										    $result = $db->query($sql,'obj');
										    foreach($result as $line){
										      $banner_id = $line->banner_id;
										      $image  = unchkhtmlspecialchars($line->image);
										?>
										<img src="file_upload/project/photo/<?php echo $image; ?>" alt="image" /> 
										<?php } ?>
									</div>
									<div class="col-md-12 p-t-20 p-b-20 row">
										<div class="col-xs-12 col-md-4">
											<div class="col-md-12"><h4><?php echo $l_name = ($_SESSION['lang'] == "th") ? $colleft_name_th : $colleft_name_en?></h4></div>
											<div class="col-md-12"><?php echo $l_desc = ($_SESSION['lang'] == "th") ? $colleft_desc_th : $colleft_desc_en?></div>
										</div>
										<div class="col-xs-12 col-md-4">
											<div class="col-md-12"><h4><?php echo $c_name = ($_SESSION['lang'] == "th") ? $colcenter_name_th : $colcenter_name_en?></h4></div>
											<div class="col-md-12"><?php echo $c_desc = ($_SESSION['lang'] == "th") ? $colcenter_desc_th : $colcenter_desc_en?></div>
										</div>
										<div class="col-xs-12 col-md-4">
											<div class="col-md-12"><h4><?php echo $r_name = ($_SESSION['lang'] == "th") ? $colright_name_th : $colright_name_en?></h4></div>
											<div class="col-md-12"><?php echo $r_desc = ($_SESSION['lang'] == "th") ? $colright_desc_th : $colright_desc_en?></div>
										</div>
									</div>
								</div>
							</div>

						<div class="produc-detail">
							<p><a href="<?php echo $Arr_Main_Menu['projectIndex']?>"><span><i class="fa fa-arrow-left"></i> BACK</span></a></p>
						</div>
					</div>
				</section>

				<!-- End Project detail -->