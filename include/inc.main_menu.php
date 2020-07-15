<?php 

$Arr_Active[$getop[0]] = "class='active'";

?>


<!-- HEADER -->
<header id="header" style ="padding-left: 0px;">
	<div id="header-wrap" style ="padding-left: 0px;">
		<div class="container" >

			<!--LOGO-->
			<div id="logo">
				<a href="<?php echo $Arr_Main_Menu["homeIndex"];?>" class="logo" data-dark-logo="images/logo-dark.png">
					<img src="images/logo.png" alt="Polo Logo">
				</a>
			</div>
			<!--END: LOGO-->

			<!--MOBILE MENU -->
			<div class="nav-main-menu-responsive">
				<button class="lines-button x">
					<span class="lines"></span>
				</button>
			</div>
			<!--END: MOBILE MENU -->
			<!--END: TOP SEARCH -->

			<!--NAVIGATION-->
			<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
				<div class="container">
					<nav id="mainMenu" class="main-menu mega-menu">
						<ul class="main-menu nav nav-pills">
								<li><a href="<?php echo $Arr_Main_Menu["homeIndex"]; ?>" <?php echo $Arr_Active["home"]; ?>>Home</a></li>
								<li><a href="CPro/index.php" <?php echo $Arr_Active["about"]; ?>>About Us</a></li>
								<li><a href="Pocket/index.php" <?php echo $Arr_Active["about"]; ?>>Pocket Book</a></li>
								<!--<li><a href="<?php echo $Arr_Main_Menu["downloadIndex"] ?>" <?php echo $Arr_Active["download"]; ?>>Downloads</a></li>-->
								<li><a href="<?php echo $Arr_Main_Menu["projectIndex"] ?>" <?php echo $Arr_Active["project"]; ?>>Projects</a></li>

								<li><a href="<?php echo $Arr_Main_Menu["contactIndex"] ?>" <?php echo $Arr_Active["contact"]; ?>>Contact us</a></li>
								<!--
								<li><a href="<?php echo $Arr_Main_Menu["storeIndex"] ?>" <?php echo $Arr_Active["store"]; ?>>Agents Store</a></li>
								<li><a href="<?php echo $Arr_Main_Menu["jobIndex"] ?>" <?php echo $Arr_Active["job"]; ?>>Job opportunity</a></li>
								<li><a href="<?php echo $Arr_Main_Menu["newsIndex"] ?>" <?php echo $Arr_Active["new"]; ?>>News</a></li>


								<li class="dropdown"> <a href="" <?php echo $Arr_Active["product"]; ?>>Products <i class="fa fa-angle-down"></i> </a>
								<ul class="dropdown-menu">

									<li class="all-products"> <a href="<?php echo $Arr_Main_Menu["productIndex"];?>">
										<?php  echo $allproduct = ($_SESSION['lang'] == "th") ? "ผลิตภัณฑ์ทั้งหมด" : "All products" ; ?>

									</a></li>

									<?php 
									$ordermenu = ($_SESSION['lang'] == "th") ? "ORDER BY product_category_name_th ASC" : "ORDER BY product_category_name_en ASC" ;

									$pmenu = $db->query("SELECT * FROM tbl_product_category WHERE product_category_id > 0 AND active = 1 {$ordermenu}",'obj');

									foreach($pmenu as $line_pmenu){

										$product_category_id = $line_pmenu->product_category_id;

										$count_p = $db->query_first("SELECT COUNT(product_id) FROM tbl_product WHERE product_category_id = {$product_category_id}");

										if ($count_p > 0) {  ?>

										<li class="dropdown-submenu"> 
											<a href="">
												<?php  echo $category_name = ($_SESSION['lang'] == "th") ? $line_pmenu->product_category_name_th : $line_pmenu->product_category_name_en ; ?>
											</a>

											<ul class="dropdown-menu">
												<?php

												$ordermenup = ($_SESSION['lang'] == "th") ? "ORDER BY product_name_th ASC" : "ORDER BY product_name_en ASC" ;

												$pdmenu = $db->query("SELECT * FROM tbl_product WHERE product_category_id = {$product_category_id} AND active = 1 {$ordermenup}",'obj');
												
												foreach($line_pdmenu as $pdmenu){ ?>
												<li>
													<a href="<?php echo $Arr_Main_Menu["productDetail"];?>&product_id=<?php echo $line_pdmenu->product_id; ?>"><?php  echo $product_name = ($_SESSION['lang'] == "th") ? $line_pdmenu->product_name_th : $line_pdmenu->product_name_en ; ?>
													</a>
												</li>

												<?php } ?>

											</ul>

										</li>

										<?php  }else{ ?> 
										<li class="all-products"> <a href="<?php echo $Arr_Main_Menu["productIndex"];?>">
											<?php  echo $category_name = ($_SESSION['lang'] == "th") ? $line_pmenu->product_category_name_th : $line_pmenu->product_category_name_en ; ?>
										</a></li>
										<?php } /*end if */  } /*end while */ ?>


									</ul>
								</li>-->
							</ul>
						</nav>
					</div>
				</div>
				<!--END: NAVIGATION-->
			</div>
		</div>
	</header>
<!-- END: HEADER -->
