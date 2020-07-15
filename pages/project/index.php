
<div id="wrapper">
    <body>


        <?php include('include/inc.nav.php'); ?>

        <!-- End Products -->                               
        <a href="#menu-toggle" class="btn btn-secondary" style="position: absolute;z-index: 1000; font-weight: bold;font-size: 15px;" id="menu-toggle">></a>      
        <!-- /#page-content-wrapper -->


        <?php
        /******************************* SQL WHERE *******************************/
        $SQLWHERE = "project_id>0";
  // /******************************* Get   Pagination *******************************/
        $DataIDTotal = $db->query_first("SELECT COUNT(project_id) FROM tbl_project WHERE {$SQLWHERE}");
        $Pagination  = new pagination();
        $Pages     = (int)$_REQUEST['p'];
        $RowsPerpage = 6;
        $arrPage = $Pagination->calculate_pages($DataIDTotal, $RowsPerpage, $Pages);
        $SEQUENCE   = ($arrPage['current'] == 1) ? 1 : ($arrPage['current'] * $RowsPerpage)-1 ; 



        /************************ PAGE SETTING******************************/
        $pset = $db -> query_first("SELECT * FROM tbl_project_page WHERE project_page_id = 1 ");
        $line_pset = $pset;
        $project_page_image  = unchkhtmlspecialchars($line_pset ->image);
        /************************ PAGE SETTING******************************/

        ?>  






        <!-- Page Content -->
        <section id="page-title" class="page-title-extended page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('file_upload/project_page/photo/<?php echo $project_page_image?>');background-repeat: no-repeat;  height: auto !important;  background-size: cover;">
            <!--<section id="page-title" class="page-title-extended page-title-parallax text-light" data-stellar-background-ratio="0.3" style="background: url('images/header2.png');background-repeat: no-repeat;  height: auto !important;  background-size: cover;">-->
            <div class="container">
                <div class="page-title col-md-12 center" data-animation="fadeInDown" data-animation-delay="300">
                    <h1>Project reference</h1>
                    <span>Home / Project reference</span>
                </div>              
            </div>
        </section>
        <!-- END: PAGE TITLE -->


        <!-- Company Profile -->

        <!-- .Company Profile -->

        <!-- Products -->
        <section style="background-image:url('images/wood.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom;"class="background-white p-t-15 p-b-15"> 
            <div class="container">
                <div class="center col-md-12">
                    <h3 style="color:#ffffff;">Experiences Projects</h3>
                </div>

                <?php
                $active_status_btn = array('btn-danger','btn-success');
                $arrStatus = array('ร่าง','เผยแพร่');
                $sql = "SELECT * FROM tbl_project 
                WHERE {$SQLWHERE}  
                ORDER BY sequence ASC, update_time DESC , create_time DESC 
                {$arrPage[limit]} ";
                $result = $db->query($sql,'obj');
                foreach($result as $line){
                  $project_id = $line->project_id;
                  $project_name_th  = unchkhtmlspecialchars($line->project_name_th);
                  $project_name_en  = unchkhtmlspecialchars($line->project_name_en);
                  $project_desc_th  = unchkhtmlspecialchars($line->project_desc_th);
                  $project_desc_th  = unchkhtmlspecialchars($line->project_desc_th);

                  $result_img = $db -> query_first("SELECT * FROM tbl_project_banner WHERE project_id = {$project_id} AND active = 1");
                  $line_img = $result_img;
                  $image = $line_img->image;
                  ?>  
                  <div class="col-md-4 p-b-15">
                    <div class="hovereffect-products project-ref">
                        <img class="img-responsive" src="file_upload/project/photo/<?php echo $image?>" alt="">
                        <!-- <a href="<?php echo $Arr_Main_Menu['projectDetail']?>&id=<?php echo $project_id?>"> -->
                            <div class="overlay">
                                <p class="p-t-30"> 
                                    
                                    <h4 class="text-center content-products">
                                        <?php echo $project = ($_SESSION['lang'] == "th") ? $project_name_th  : $project_name_en ;
                                        ?>
                                    </h4>
                                    <p class="text-center text-light">
                                        <?php echo $desc = ($_SESSION['lang'] == "th") ? $project_desc_th  : $project_desc_en ;
                                        ?>
                                    </p>
                                    
                                </p> 
                            </div>
                        </a>
                    </div>
                    <p class="productword project-ref text-center"><?php echo $project = ($_SESSION['lang'] == "th") ? $project_name_th  : $project_name_en ;
                        ?></p>
                    </div>
                    <?php  } ?>                  
                </div>  
                <!--<div class="row">-->
                    
                    <!--<?php /*require_once("{$op}/pagination.php");*/ ?> -->
                    <!-- //////////////*////// -->
                <!--</div>-->               
            </section>
            

        <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
    <?php include('include/inc.footer.php'); ?>
</div>