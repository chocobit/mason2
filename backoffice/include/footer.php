<!-- Footer -->
<div class="footer white_txt bordered_wht_border-title image_bck" data-color="#292929">
    <div class="container">
        
        <!-- <div class="row">
            <div class="col-md-12 text-center">
                <div class="logo text-center">
                    <a href="#"><b>Stiebel Eltron</b></a>
                </div>
                <br>
                <span class="contacts_ti ti-mobile"></span>+11 (0) 200 1111 001 , +11 (0) 200 1111 002 | 
                <span class="contacts_ti ti-email"></span>support@StiebelEltron.com<br />
                <span class="contacts_ti ti-location-pin"></span>Australia place nice, RD nice DHA Road, state pace 786<br />
            </div>        
        </div>   -->
<?php 
$chk_footer = $db->queryUniqueValue("SELECT detail_".$_SESSION['lang']." FROM tbl_config_other WHERE oconfig_id = 3"); 
$detail_footer = unchkhtmlspecialchars($chk_footer);
echo $detail_footer;
?>
        <!--Row End-->
   
    </div>
    <!-- Container End -->

    <!-- Footer Copyrights -->
    <div class="footer_end">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span class="sub">&copy; Copyright 2018 - Stiebel Eltron</span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Copyrights End -->


</div>
<!-- Footer End -->


</div>
<!-- Page End -->



<!-- JQuery -->
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- WL Carousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- PrefixFree -->
<script src="js/prefixfree.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Textillate -->
<script src="js/jquery.lettering.js"></script>
<!-- Countdown -->
<script src="js/jquery.plugin.min.js"></script> 
<script src="js/jquery.countdown.min.js"></script>
<!-- JQuery UI -->
<script src="js/jquery-ui.js"></script>
<!-- Wow -->
<script src="js/wow.js"></script>
<!-- Masonry -->
<script src="js/masonry.pkgd.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Theme JS -->
<script src="js/script.js"></script>



</body>
</html>