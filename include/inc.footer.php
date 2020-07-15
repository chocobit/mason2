<?php 
$result = $db -> query_first("SELECT * FROM tbl_footer WHERE footer_id = 1");
$line = $result;

$col1_name_th   = unchkhtmlspecialchars($line->col1_name_th);
$col1_name_en   = unchkhtmlspecialchars($line->col1_name_en);
$col1_desc_th  = unchkhtmlspecialchars($line->col1_desc_th);
$col1_desc_en  = unchkhtmlspecialchars($line->col1_desc_en);
$col1_url  = unchkhtmlspecialchars($line->col1_url);

$col2_name_th   = unchkhtmlspecialchars($line->col2_name_th);
$col2_name_en   = unchkhtmlspecialchars($line->col2_name_en);
$col2_desc_th  = unchkhtmlspecialchars($line->col2_desc_th);
$col2_desc_en  = unchkhtmlspecialchars($line->col2_desc_en);

$col3_name_th   = unchkhtmlspecialchars($line->col3_name_th);
$col3_name_en   = unchkhtmlspecialchars($line->col3_name_en);
$col3_desc_th  = unchkhtmlspecialchars($line->col3_desc_th);
$col3_desc_en  = unchkhtmlspecialchars($line->col3_desc_en);

$col4_face   = unchkhtmlspecialchars($line->col4_face);
$col4_twis   = unchkhtmlspecialchars($line->col4_twis);
$col4_yt  = unchkhtmlspecialchars($line->col4_yt);
$col4_ig  = unchkhtmlspecialchars($line->col4_ig);

?>
<!-- FOOTER -->
<footer class="background-dark text-light" id="footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<div class="widget clearfix widget-about">
						<h4 class="widget-title"><?php echo $c1_name = ($_SESSION['lang']=="th") ? $col1_name_th  : $col1_name_en ; ?></h4>
						<p style="margin-top: 12px;">
							<?php echo $c1_desc = ($_SESSION['lang']=="th") ? $col1_desc_th  : $col1_desc_en ; ?>
							<p>
								<div class="left">
									<a class="button transparent effect fill" href="<?php echo $col1_url ;?> "><span>Read More</span> </a>
								</div>
							</div>							
							<small>Copyright © 2018 MASON ACOUSTICS CO.,LTD.</small>
						</div>

						<div class="col-md-3">
							<div class="widget clearfix widget-about">
								<h4 class="widget-title"><?php echo $c2_name = ($_SESSION['lang']=="th") ? $col2_name_th  : $col2_name_en ; ?></h4>
								<ul class="list p-l-0">
									<li><a href="http:/www.masonacoustics.com" target="_blank">www.masonacoustics.com</a></li>		     	
								</ul>
							</div>
							
						</div>

						<div class="col-md-3">
							<div class="widget clearfix widget-contact-us">
								<h4 class="widget-title"><?php echo $c3_name = ($_SESSION['lang']=="th") ? $col3_name_th  : $col3_name_en ; ?></h4>
								<ul class="list-large list-icons">
									<li><i class="fa fa-map-marker"></i>
										49/11 Moo 4 Soi Kingkaew 30, Kingkaew Road, Rchateva, Bangplee, Samutprakarn 10540 </li>
										<li><i class="fa fa-phone"></i>Tel : +66-(0)2-750-3595</li>
										<li><i class="fa fa-fax-footer"></i>Fax : +66-(0)2-750-3596</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">						
								<h4 class="widget-title">Social Media</h4>
								<div class="social-icons center">
									<ul>
										<li class="social-facebook"><a href="<?php echo $col4_face ;?>"><i class="fa fa-facebook"></i></a></li>
										<li class="social-twitter"><a href="<?php echo $col4_twis ;?>"><i class="fa fa-twitter"></i></a></li>
										<li class="social-youtube"><a href="<?php echo $col4_yt ;?>"><i class="fa fa-youtube-square"></i></a></li>
										<!--<li class="social-instagram"><a href="<?php echo $col4_ig ;?>"><i class="fa fa-instagram"></i></a></li>-->
									</ul>
								</div>
							</div>

					<!--<div class="col-md-3">
							<div class="widget clearfix widget-newsletter">
		                                    <h4 class="widget-title p-t-36">Newsletter</h4>
		                                    <div class="input-group">
		                                        <input type="email" id="newsletter_email" aria-required="true" name="widget-subscribe-form-email" class="form-control footer required email" placeholder="e-mail">
		                                        <span class="input-group-btn">
													<button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary-footer newsletter_email_btn">OK</button>
												</span>
		                                    </div>
		                                <script type="text/javascript">
		                                    jQuery("#widget-subscribe-form").validate({
		                                        submitHandler: function(form) {
		                                            jQuery(form).ajaxSubmit({
		                                                dataType: 'json',
		                                                success: function(text) {
		                                                    if (text.response == 'success') {
		                                                        $.notify({
		                                                            message: "You have successfully subscribed to our mailing list."
		                                                        }, {
		                                                            type: 'success'
		                                                        });
		                                                        $(form)[0].reset();

		                                                    } else {
		                                                        $.notify({
		                                                            message: text.message
		                                                        }, {
		                                                            type: 'warning'
		                                                        });
		                                                    }
		                                                }
		                                            });
		                                        }
		                                    });
		                                </script>
	                                <script type="text/javascript">
										    $(document).delegate('.newsletter_email_btn', 'click', function(event) {
										    if($("#newsletter_email").val() != "") 
										    {
										    	//alert("Ok");
										        var newsletter_email = $("#newsletter_email").val();

										              //if(confirm("Are you sure you want to move ?")) {
										                $.post('action.php', {
										                  'action' : 'newsletter_email',
										                  'newsletter_email' : newsletter_email
										                }, function(response) {
										                	console.log(response);
										                     alert("ส่งข้อมูลเรียบร้อย รอรับข่าวสารและโปรโมชั่นใหม่ ได้ในอีเมลล์ที่ท่านได้ระบุไว้")
										                     window.location = "index.php";

										                });

										    } else {
										       alert("Please fill out the fields");
										       $("#newsletter_email").focus(); 
										    }
										    return false;
										});
										</script>

		                    </div>
		                </div>		-->

		            </div>
		        </div>
		    </div>
		</footer>
		<!-- END: FOOTER -->
