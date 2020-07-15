<?php
$product_id = (int)($_GET['product_id']);
// Get Data
$DataIDTotal = $db->query_first("SELECT COUNT(product_id) FROM tbl_product WHERE product_id = {$product_id}");

if (isset($_GET['product_id']) and $product_id > 0 and $DataIDTotal == 1) {


  $action = "EditData";
  $result = $db -> query_first("SELECT * FROM tbl_product WHERE product_id = {$product_id}");
  $line = $result;
  $product_category_id  = (int)($line->product_category_id);

  $product_name = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line ->product_name_th) : unchkhtmlspecialchars($line ->product_name_en) ;
  

  $product_desc = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line ->product_desc_th) : unchkhtmlspecialchars($line ->product_desc_en) ;

  $product_detail = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line ->product_detail_th) : unchkhtmlspecialchars($line ->product_detail_en) ;
  
  $product_solid  = unchkhtmlspecialchars($line ->product_solid);
  $product_micron_min  = unchkhtmlspecialchars($line ->product_micron_min);
  $product_micron_max  = unchkhtmlspecialchars($line ->product_micron_max);
  $product_thinner  = unchkhtmlspecialchars($line ->product_thinner);


  $product_msds  = unchkhtmlspecialchars($line ->product_msds);
  $product_technical  = unchkhtmlspecialchars($line ->product_technical);
  $product_cert  = unchkhtmlspecialchars($line ->product_cert);

  $image  = unchkhtmlspecialchars($line ->image);

  $meta_title  = unchkhtmlspecialchars($line ->meta_title);
  $meta_description  = unchkhtmlspecialchars($line ->meta_description);
  $meta_keyword  = unchkhtmlspecialchars($line ->meta_keyword);
  
  $active  = unchkhtmlspecialchars($line ->active);
  $arrStatus[$active] = "selected";
  $arrCategorySelect[$product_category_id] = "selected";



  $re_cate = $db -> query_first("SELECT * FROM tbl_product_category WHERE product_category_id = {$product_category_id}");
  $line_cate = $re_cate;
  $product_category_name = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line_cate ->product_category_name_th) : unchkhtmlspecialchars($line_cate ->product_category_name_en) ;
  
  $product_jobtype_id = (int)($line->jobtype_id);

  $re_jobtype = $db -> query_first("SELECT * FROM tbl_jobtype WHERE jobtype_id = {$product_jobtype_id}");
  $line_jobtype = $re_jobtype;
  $product_jobtype = ($_SESSION['lang'] == "th") ? unchkhtmlspecialchars($line_jobtype ->jobtype_name_th) : unchkhtmlspecialchars($line_jobtype ->jobtype_name_en) ;

  $title = "Edit Data";
} else {
	alertgo("ไม่พบหน้าที่ต้องการ","index.php");
}

?>
			<!-- PAGE TITLE -->
			<section id="page-title" class="page-title-extended page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('images/parallax/product.png');background-repeat: no-repeat;
    background-size: cover;">
				<div class="container">
					<div class="page-title col-md-12 center" data-animation="fadeInDown" data-animation-delay="300">
						<h1>Products</h1>
						<span>Home / Products</span>
					</div>		        
				</div>
			</section>
			<!-- END: PAGE TITLE -->

			<!-- Company Profile -->
			<section class="p-b-30">
				<div class="container">				
					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-7">
							<h2><?php echo $product_category_name; ?></h2>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-5">
							<div class="notIE">
								<label class="detail">
								<select id="s_province">

								<?php
								  // $arrCategorySelect[$SEARCH_PROVINCE] = "selected";
				      //             $province = $db->query("SELECT * FROM province WHERE PROVINCE_ID > 0");
				      //             // $line_province = $db ->fetchNextObject($province);
				      //             while($line_province = $db->fetchNextObject($province)){
				      //             	 $PROVINCE_NAME = ($_SESSION['lang']=="th") ? $line_province->PROVINCE_NAME : $line_province->PROVINCE_NAME_ENG ;

				      //             echo '<option value="'.$line_province->PROVINCE_ID.'" '.'>'.$PROVINCE_NAME.'</option>'; //close your tags!!
				      //             }
				                  ?>
									
									<?php

									  echo "<option value='0' selected >Select Product Category</option>"; //close your tags!!

								$pmenu = $db->query("SELECT * FROM tbl_product_category WHERE product_category_id > 0 AND active = 1 ORDER BY product_category_name_en ASC");

									while($line_pmenu = $db->fetchNextObject($pmenu)){ 

										$product_category_id = $line_pmenu->product_category_id;

									$category_name = ($_SESSION['lang'] == "th") ? $line_pmenu->product_category_name_th : $line_pmenu->product_category_name_en ; 

								  // $arrCategorySelect[$SEARCH_PROVINCE] = "selected";
				      //             $province = $db->query("SELECT * FROM province WHERE PROVINCE_ID > 0");
				      //             // $line_province = $db ->fetchNextObject($province);
				      //             while($line_province = $db->fetchNextObject($province)){
				      //             	 $PROVINCE_NAME = ($_SESSION['lang']=="th") ? $line_province->PROVINCE_NAME : $line_province->PROVINCE_NAME_ENG ;

				      //             echo '<option value="'.$line_province->PROVINCE_ID.'" '.'>'.$PROVINCE_NAME.'</option>'; //close your tags!!
									  echo '<option value="'.$product_category_id.'" '.'>'.$category_name.'</option>'; //close your tags!!

									
				                 	 }
				                  ?>
								</select>
								</label>
							</div>							
						</div>
					</div>	
					<div class="content-download-top"></div>

					<div class="col-md-12 p-t-30">
						<div class="row">
							<div class="col-md-5 p-b-15 text-center img">
								<img class="img-responsive" src='<?php echo $image_print = ($image != '') ? "file_upload/product/photo/$image" : "images/200xx200.jpg" ; ?>'>
							</div>
							<div class="col-md-7">
								<h4 class="p-b-25" style="font-size: 25px;"><?php echo $product_name; ?></h4>
								<p style="font-size: large;"><?php echo $product_desc; ?></p>
								<dl class="dl-horizontal product-detail">
									<?php echo $product_detail; ?>
								</dl>
								
								<?php if ($_GET['area'] != "" and $_GET['micron'] != "") { 

									$total = ($product_solid * 10)/$_GET['micron'];

									$result_t = $_GET['area'] / $total ;


									?>
								<div>

									<h2><?php if($_SESSION["lang"] == "th"){ echo "ปริมาณที่ต้องใช้"; } else {echo "
Required volume";} ?> <b style="color:red"><?php echo number_format($result_t,2); ?></b> <?php echo $liter = ($_SESSION['lang'] == "th") ? "ลิตร" : "liters" ; ?>
</h2>

<h2> <?php echo $jobtype = ($_SESSION['lang'] == "th") ? "ประเภทงาน" : "Jobtype" ; ?>  : <b style="color:red"><?=$product_jobtype?></b>		
</h2>
					</div>
								<?php } ?>
							</div>


						</div>

						<div class="col-md-offset-6 col-md-6 col-xs-12 text-right">
							<a class="button orange-dark effect fill" href="<?php echo $Arr_Main_Menu["downloadIndex"]; ?>"><span>Download</span></a>
						</div>

						<div class="col-md-offset-6 col-md-6 col-xs-12 produc-detail text-right">
							<p><a href="<?php echo $Arr_Main_Menu["productIndex"]; ?>"><span><i class="fa fa-arrow-left"></i> BACK TO ALL PRODUCT</span> </a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- .Company Profile -->