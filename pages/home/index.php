	
<div id="wrapper">
	<body>

			<?php include('include/inc.nav.php'); ?>

			<!-- Toggle bar -->                               
			<a href="#menu-toggle" class="btn btn-secondary" style="position: absolute;z-index: 1000" id="menu-toggle">></a>               
			<!-- SECTION SLIDER OWL -->


		        <?php
		        /************************ PAGE SETTING******************************/
		        $pset = $db -> query_first("SELECT * FROM tbl_project_page WHERE project_page_id = 1 ");
		        $line_pset = $pset;
		        $project_page_image  = unchkhtmlspecialchars($line_pset ->image);
		        /************************ PAGE SETTING******************************/

		        ?>  
				<section>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/home/images/bg/header1.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; "> </div>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/home/images/bg/header2.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; background-position: right bottom;"> </div>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/home/images/bg/header3.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; background-position: right bottom;"> </div>
						
				</section>

			<!-- END: SECTION SLIDER OWL -->

			<!-- SECTION ABOUT -->
			<section style="background-image:url('pages/home/images/BG.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom;" class="p-b-50 background-white">
				<div class="container">

					<div class="col-md-5 ">
						<img src="pages/home/images/LAB-AERO ACOUSTICAL.JPG" class="mySlides2" style="width: 100%;  padding-top: 60px">
						<img src="pages/home/images/LAB LOUVER.jpg" class="mySlides2" style="width: 100%;  padding-top: 60px">
						<img src="pages/home/images/LAB-FIRE TEST.jpg" class="mySlides2" style="width: 100%;  padding-top: 60px">

						<button class="w3-button w3-gray w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  						<button class="w3-button w3-gray w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>

					<div class="col-md-6" style=" padding-top: 60px">
						<div class="col-md-1">
						</div>
						<div class="col-md-12">
						<?php 

						$result = $db -> query_first("SELECT * FROM tbl_home WHERE home_id = 1");
						$line = $result;

						$home_title = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line->home_title_th) : unchkhtmlspecialchars($line->home_title_en) ;

						$home_desc = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line->home_desc_th) : unchkhtmlspecialchars($line->home_desc_en) ;

						$home_detail = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line->home_detail_th) : unchkhtmlspecialchars($line->home_detail_en) ;
						$home_url = unchkhtmlspecialchars($line->home_url);
						?>


						<h2 style="color:#000000;"><?php echo "ABIE TIGER";?><br><?php echo "By MASON ACOUSTICS CO,.LTD"?></h2>
						<br>
						<p style="color:#000000;"><?php echo " 	Mason Acoustics has two modern factories
							located on the 69,000 square meters and
							55,000 square meters. Both of Mason
							Acoustics factories estate at Kabinbury
							where is approximately two hours from
							Bangkok. The complex includes the test
							Mason Acoustics Facilities
							facilities, a training center with a 40 seat
							lecture hall for staff and customers and
							the R&D and design offices. The facility
							has been set up to manufacture export
							quality products and is staffed by skilled
							workers who are supervised by experienced factory engineers.";?></p><br><br><br><br><br><br>
					<!--<div class="left">
						<a class="button grey-dark effect fill" href="<?php echo $home_url;?>"><span>Read More</span> </a>
					</div>-->
					</div>
				</div>

			</div>

			<div class="container">
				<center><h3 style="color:#000000;">Our Major Experiences Projects</h3></center>
				<?php
				$sql_2 = "SELECT * FROM tbl_project WHERE project_id > 0 AND active = 1 ORDER BY sequence ASC, update_time DESC , create_time DESC LIMIT 3";
				$result_2 = $db->query($sql_2,'obj');
				foreach($result_2 as  $line_2){
					$project_id = $line_2->project_id;
					$project_name_th  = unchkhtmlspecialchars($line_2->project_name_th);
					$project_name_en  = unchkhtmlspecialchars($line_2->project_name_en);
					$project_desc_th  = unchkhtmlspecialchars($line_2->project_desc_th);
					$project_desc_en  = unchkhtmlspecialchars($line_2->project_desc_en);

					$result_banner = $db -> query_first("SELECT image FROM tbl_project_banner WHERE project_id = $project_id AND active = 1");
					$line_banner =$result_banner;
					$image_project   = unchkhtmlspecialchars($line_banner->image);



					?>
					<center><div class="col-sm-4 masonry-item">
						<div class="hovereffect">
							<img alt="" class="img-responsive" src="file_upload/project/photo/<?php echo $image_project;?>">
							<div class="overlay">
								<h2>
									<!--<a href="index.php?op=project-detail&id=<?php echo $project_id; ?>"> -->
									<a href="./AbieBook/index.php#features/420">
										<?php echo $project = ($_SESSION['lang'] == "th") ? $project_name_th : $project_name_en ; 
										?>
									</a>
								</h2>
							</div>
						</div>				
						<p>
							<?php echo $project = ($_SESSION['lang'] == "th") ? $project_desc_th : $project_desc_en ; 
							?>
						</p>
					</div></center>
					<?php } ?>	


					<div class ="clearfix"></div>
					<div class ="clearfix"></div>

					<center>
						<a class="button grey-dark effect fill" href="./AbieBook/index.php#features/420"><span>Read More</span> </a>
					</center>
				</div>
		</section>
		<!-- END: SECTION ABOUT -->

		
		
		<!-- coated-projects -->
		<!--<section  style="background-image:url('pages/home/images/GALLERY.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom; padding-top: 60px; filter: grayscale(60%); " class="p-b-30 background-white coated-projects" >
			<div class="container">
				<h3 style="color:#ffffff;">Our Major Experiences Projects</h3>
				<?php
				$sql_2 = "SELECT * FROM tbl_project WHERE project_id > 0 AND active = 1 ORDER BY sequence ASC, update_time DESC , create_time DESC LIMIT 3";
				$result_2 = $db->query($sql_2,'obj');
				foreach($result_2 as  $line_2){
					$project_id = $line_2->project_id;
					$project_name_th  = unchkhtmlspecialchars($line_2->project_name_th);
					$project_name_en  = unchkhtmlspecialchars($line_2->project_name_en);
					$project_desc_th  = unchkhtmlspecialchars($line_2->project_desc_th);
					$project_desc_en  = unchkhtmlspecialchars($line_2->project_desc_en);

					$result_banner = $db -> query_first("SELECT image FROM tbl_project_banner WHERE project_id = $project_id AND active = 1");
					$line_banner =$result_banner;
					$image_project   = unchkhtmlspecialchars($line_banner->image);



					?>
					<center><div class="col-sm-4 masonry-item">
						<div class="hovereffect">
							<img alt="" class="img-responsive" src="file_upload/project/photo/<?php echo $image_project;?>">
							<div class="overlay">
								<h2>
									<a href="index.php?op=project-index">
										<?php echo $project = ($_SESSION['lang'] == "th") ? $project_name_th : $project_name_en ; 
										?>
									</a>
								</h2>
							</div>
						</div>				
						<p>
							<?php echo $project = ($_SESSION['lang'] == "th") ? $project_desc_th : $project_desc_en ; 
							?>
						</p>
					</div></center>
					<?php } ?>	


					<div class ="clearfix"></div>
					<div class ="clearfix"></div>

					<center>
						<a class="button grey-dark effect fill" href="<?php echo $Arr_Main_Menu['projectIndex'];?>"><span>Read More</span> </a>
					</center>
				</div>
			</section>-->
			<!-- .coated-projects -->



		
		<!-- /#wrapper -->

		<!-- Bootstrap core JavaScript -->
		<script src="pages/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>


		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			    var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			       x[i].style.display = "none";  
			    }
			    myIndex++;
			    if (myIndex > x.length) {myIndex = 1}    
			    x[myIndex-1].style.display = "block";  
			    setTimeout(carousel, 5000); // Change image every 2 seconds
			}
		</script>

		<script>
		  var slideIndex = 1;
		  showDivs(slideIndex);

		  function plusDivs(n) {
		    showDivs(slideIndex += n);
		  }

		  function showDivs(n) {
		    var i;
		    var x = document.getElementsByClassName("mySlides2");
		    if (n > x.length) {slideIndex = 1}    
		    if (n < 1) {slideIndex = x.length}
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    x[slideIndex-1].style.display = "block";  
		  }
		  </script>
		

	</body>
	<?php include('include/inc.footer.php'); ?>
</div>















	<!-- <section>
			<div  style="background-color: #0C0C0C;" id="slider">
				<div id="slider-carousel">
					<?php
					$sql = "SELECT * FROM tbl_home_banner 
					WHERE home_banner_id > 0  AND active = 1
					ORDER BY sequence ASC, update_time DESC , create_time DESC";
					$result = $db->query($sql,'obj');
					foreach($result as $line){
						$home_banner_id = $line->home_banner_id;

						$title_1 = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->title1_th) : unchkhtmlspecialchars($line->title1_th) ;
						$title_2 = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->title2_th) : unchkhtmlspecialchars($line->title2_en) ;
						$title_3 = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->title3_th) : unchkhtmlspecialchars($line->title3_en) ;

						?> 
						<div style="background-image:url('file_upload/home_banner/photo/<?php echo $line->image; ?>');background-repeat: no-repeat;background-size: cover; height: auto !important;" class="owl-bg-img fullscreen">
							<div class="container-fullscreen">
	
					</div>
				</div>
				<?php } ?>		
				</div>
			</div>
		</section> -->
