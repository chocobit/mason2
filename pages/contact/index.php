
<div id="wrapper">
	<body>

		<?php include('include/inc.nav.php'); ?>

		<!-- End Products -->                               
		<a href="#menu-toggle" class="btn btn-secondary" style="position: absolute;z-index: 1000" id="menu-toggle">></a>                
		<!-- /#page-content-wrapper -->

		<?php 
		$result = $db -> query_first("SELECT * FROM tbl_contact WHERE contact_id = 1");
		$line = $result;

		$box1_name = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box1_name_th) : unchkhtmlspecialchars($line->box1_name_en) ;

		$box1_address  = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box1_address_th) : unchkhtmlspecialchars($line->box1_address_en) ;

		$box1_telephone  = unchkhtmlspecialchars($line->box1_telephone);
		$box1_fax  = unchkhtmlspecialchars($line->box1_fax);
		$box1_map  = unchkhtmlspecialchars($line->box1_map);

		$box2_name = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box2_name_th) : unchkhtmlspecialchars($line->box2_name_en) ;

		$box2_address  = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box2_address_th) : unchkhtmlspecialchars($line->box2_address_en) ;
		$box2_telephone  = unchkhtmlspecialchars($line->box2_telephone);
		$box2_fax  = unchkhtmlspecialchars($line->box2_fax);
		$box2_map  = unchkhtmlspecialchars($line->box2_map);

		$box3_name = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box3_name_th) : unchkhtmlspecialchars($line->box3_name_en) ;

		$box3_address  = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box3_address_th) : unchkhtmlspecialchars($line->box3_address_en) ;
		$box3_telephone  = unchkhtmlspecialchars($line->box3_telephone);
		$box3_email  = unchkhtmlspecialchars($line->box3_email);
		$box3_map  = unchkhtmlspecialchars($line->box3_map);

		$box4_name = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box4_name_th) : unchkhtmlspecialchars($line->box4_name_en) ;

		$box4_address  = ($_SESSION['lang']=="th") ? unchkhtmlspecialchars($line->box4_address_th) : unchkhtmlspecialchars($line->box4_address_en) ;
		$box4_telephone  = unchkhtmlspecialchars($line->box4_telephone);
		$box4_email  = unchkhtmlspecialchars($line->box4_email);
		$box4_map  = unchkhtmlspecialchars($line->box4_map);

		$contact_lat  = unchkhtmlspecialchars($line->map_lat);
		$contact_lng  = unchkhtmlspecialchars($line->map_lng);


		/************************ PAGE SETTING******************************/
		$pset = $db -> query_first("SELECT * FROM tbl_contact_page WHERE contact_page_id = 1 ");
		$line_pset = $pset;
		$contact_page_image  = unchkhtmlspecialchars($line_pset ->image);
		/************************ PAGE SETTING******************************/

		?>
		<!-- PAGE TITLE -->
		<!--<section  id="page-title" class="page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('file_upload/contact_page/photo/<?php echo $contact_page_image?>');background-repeat: no-repeat;
			background-size: cover;">
			<div class="container">
				<div class="page-title col-md-12 center" data-animation="fadeInDown" data-animation-delay="300">
					<h1>Contact Us</h1>
					<span>Home / Contact Us</span>
				</div>		        
			</div>
		</section>-->
		<section>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/contact/images/header1.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; "> </div>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/contact/images/header2.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; background-position: right bottom;"> </div>
				<div id="page-title" class="page-title-parallax text-light mySlides"  style="background: url('./pages/contact/images/header3.png');background-repeat: no-repeat; background-position: right bottom; height: auto !important;  background-size: cover; background-position: right bottom;"> </div>						
		</section>
		<!-- END: PAGE TITLE -->
		<!--  <div class="map" data-map-address="<?php echo "$contact_lat,$contact_lng";?>" data-map-zoom="10" data-map-icon="images/markers/marker1.png" data-map-type="ROADMAP"></div> -->
		<!-- END: PAGE google map -->

		<section style="background-image:url('pages/contact/images/BG.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom;" class="p-b-30 p-t-0 background-white">
			<div class="container">
			<center><h3 style="color:#000000;  padding-top: 60px;">Contact Us</h3></center>
				<div class="p-b-10 p-t-10" style="overflow: auto;">

					<div style="padding-top: 10px;" class="col-xs-12 col-sm-12 col-md-6 p-b-10">
						<div id="map" style="width:90%;height:400px ; box-shadow: 1px 1px 1px 1px ;"></div>

						<script>
							function myMap() {
								var myCenter = new google.maps.LatLng(13.668786,100.724214);
								var mapCanvas = document.getElementById("map");
								var mapOptions = {center: myCenter, zoom: 10};
								var map = new google.maps.Map(mapCanvas, mapOptions);
								var marker = new google.maps.Marker({position:myCenter});
								marker.setMap(map);

								var infowindow = new google.maps.InfoWindow({
									content: 'Mason Acoustics CO., LTD. (HEAD OFFICE)'
								});
								infowindow.open(map,marker);
							}
						</script>

						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 p-b-10">
						<div class="p-t-30 test-left">
							<h4 style="color:#000000;"></br></br></br><?php echo $box1_name;?></h4>
							<ul class="list-large list-icons">
								<li style="color:#000000;"><i class="fa fa-map-marker"></i><?php echo $box1_address;?></li>
								<li style="color:#000000;"><i class="fa fa-phone"></i>Tel : <?php echo $box1_telephone;?></li>
								<li style="color:#000000;"><i class="fa fa-fax-contact"></i>Fax : <?php echo $box1_fax;?></li>
							</ul>
							<div class="right">
								<a href="<?php echo $box1_map;?>"><button class="btn btn-contact btn-org" type="button">Go to google map</button></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- PAGE google map  -->

			<!-- Google map sensor -->
		<!-- <div id="map" height="100px" style="    width: 100%;
		height: 100%;
		min-height: 370px;"></div> -->

		<script src="http://maps.google.com/maps/api/js?key=AIzaSyDjsJ_KE4NwVD6xQna1Hf-dDYZ7p9WEg7E&sensor=false" 
		type="text/javascript"></script>
		<script type="text/javascript">
			var locations = [['Mason Acoustics CO., LTD. (HEAD OFFICE)',13.668786,100.724214, 10]];

			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: new google.maps.LatLng(<?php echo "$contact_lat,$contact_lng";?>),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();

			var marker, i;

			for (i = 0; i < locations.length; i++) {  
				marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon:"images/markers/marker2.png"
				});

				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infowindow.setContent(locations[i][0]);
						infowindow.open(map, marker);
					}
				})(marker, i));
			}
		</script>


		<script type="text/javascript">
			$(document).delegate('#bt_send', 'click', function(event) {
				if($("#contact_name").val() != "" && $("#contact_email").val() != "" && $("#contact_message").val() != "") 
				{
		// alert("Ok");
		var contact_name = $("#contact_name").val();
		var contact_email = $("#contact_email").val();
		var contact_message = $("#contact_message").val();

		//if(confirm("Are you sure you want to move ?")) {
			$.post('pages/contact/action.php', {
				'action' : 'contact_customer',
				'contact_name' : contact_name,
				'contact_email' : contact_email,
				'contact_message' : contact_message
			}, function(response) {
				alert("ส่งข้อมูลเรียบร้อย เราจะติดต่อกลับภายใน 24 ชม. หลังจากได้รับข้อความของท่าน")
				window.location = "index.php";

			});

		} else {
			alert("Please fill out the fields");
		}
		return false;
	});
	</script>


<!-- /#wrapper -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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

	</body>
	<?php include('include/inc.footer.php'); ?>
</div>
