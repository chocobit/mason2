<?php
		/************************PRODUCT PAGE SETTING******************************/
		$pset = $db -> query_first("SELECT * FROM tbl_product_page WHERE product_page_id = 1 ");
		$line_pset = $pset;
		$product_page_desc = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line_pset ->product_page_desc_th) : unchkhtmlspecialchars($line_pset ->product_page_desc_en);
		$product_page_image  = unchkhtmlspecialchars($line_pset ->image);
  		/************************PRODUCT PAGE SETTING******************************/
}
?>  
			<!-- PAGE TITLE -->
			<section id="page-title" class="page-title-extended page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('file_upload/product_page/photo/<?php echo $product_page_image?>');">
				<div class="container">
					<div class="page-title col-md-12 center" data-animation="fadeInDown" data-animation-delay="300">
						<h1>Products</h1>
						<span>Home / Products</span>
					</div>		        
				</div>
			</section>
			<!-- END: PAGE TITLE -->


			<!-- Company Profile -->
			<section class="background-white p-b-30 center">
				<div class="container">

					<!-- Popup itself -->
					<div id="color-popup" class="col-xs-12 color-bg white-popup-products mfp-with-anim mfp-hide text-light">						
						<div class="col-xs-12 col-lg-4 col-md-4 col-sm-12 box-color-home">
							<div class="home fab center ">
								<div class="link link-up home "></div>
								<div class="link link-up home"></div>
								<div class="link link-up home"></div>
								<div class="link link-up  home"></div>
								<div class="link link-up  home"></div>
								<div class="pick pick2 home"><i class="fa fa-eyedropper"></i></div>
							</div>
						</div>
						<div class="row text-light">
							<div class="col-xs-12 col-md-7">
								<h2 class="home center p-t-15 p-b-30">colour  volume</h2>
								<p><!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua --></p>
								<div class="col-xs-12 col-md-2 text-center">
								<p class="color-rgb">	</p>
									<p>
									R : <span class="c-r">5</span><br>
									G : <span class="c-g">71</span><br>
									B : <span class="c-b">161</span><br>
									<span class="color-show">	</span></p>
								</div>
								

							</div>
						</div>
					</div>	


					<!-- color -->
					<div class="col-md-12">
						<div class="fab right">
							<div class="link link-p"></div>
							<div class="link link-p"></div>
							<div class="link link-p"></div>
							<div class="link link-p"></div>
							<div class="link link-p"></div>
							<div class="link link-p click-more"><a title="" data-lightbox="gallery-item" href="#color-popup" class="open-popup-link"><i class="fa fa-arrow-left-fab"></i></a></div>
							<div class="pick pick1"><i class="fa fa-eyedropper"></i></div>					

						</div>
					</div>
					<!-- .color -->

					<div class="col-md-12">
						<h3>Products</h3>
						<p><?php echo $product_page_desc; ?></p>
					</div>
				</div>
			</section>
				<!-- .Company Profile -->

				<!-- Products -->
				