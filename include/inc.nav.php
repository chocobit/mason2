<!-- Sidebar -->
<?php  $Arr_Active[$getop[0]] = "class='active'"; ?>

<div id="sidebar-wrapper">
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555; 
        }
    </style>
    <ul class="sidebar-nav">
        <li style="background-image:url('pages/home/images/BG.png');background-repeat: no-repeat;background-size: cover; height: auto !important; background-position: right bottom;">
            <a href="#" >
                <span><img style="width: 90%;padding-left: 10px; padding-right: 5px; padding-top: 15px " src="./images/LOGO_ABIE TIGER.png"></i></span>
            </a>
        </li> 
        <li style="padding-top: 2px;">
         <a href="<?php echo $Arr_Main_Menu["homeIndex"]; ?>" <?php echo $Arr_Active["home"]; ?>>
             <span><img style="width: 100%;" src="./images/nav/home.jpg"></i></span>
         </a>
     </li> 
     <li>
         <a href="./AbieBook/index.php#features/2">
             <span><img style="width: 100%;" src="./images/nav/new/aboutus.png"></i></span>
         </a>
     </li> 

     <li>
         <a href="./AbieBook/index.php#features/22">
             <span><img style="width: 100%;" src="./images/nav/new/content.png"></i></span>
         </a>
     </li> 
     <li>
        <a href="./AbieBook/index.php#features/24">
            <span><img style="width: 100%;" src="./images/nav/new/nav_01.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/68">
            <span><img style="width: 100%;" src="./images/nav/new/nav_02.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/88">
            <span><img style="width: 100%;" src="./images/nav/new/nav_03.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/96">
            <span><img style="width: 100%;" src="./images/nav/new/nav_04.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/116">
            <span><img style="width: 100%;" src="./images/nav/new/nav_05.png"></i></span>
        </a>
    </li>
    <li >
        <a href="./AbieBook/index.php#features/134">
            <span><img style="width: 100%;" src="./images/nav/new/nav_06.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/140">
            <span><img style="width: 100%;" src="./images/nav/new/nav_07.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/198">
            <span><img style="width: 100%;" src="./images/nav/new/nav_08.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/230">
            <span><img style="width: 100%;" src="./images/nav/new/nav_09.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/258">
            <span><img style="width: 100%;" src="./images/nav/new/nav_10.png"></i></span>
        </a>
    </li>
    <li>
        <a href="./AbieBook/index.php#features/420">
            <span><img style="width: 100%;" src="./images/nav/new/nav_11.png"></i></span>
        </a>
    </li>
    <li>
        <a >
            <span><img style="width: 100%;" src="./images/nav/new/nav_12.png"></i></span>
        </a>
    </li>
    <li>
        <a >
            <span><img style="width: 100%;" src="./images/nav/new/nav_13.png"></i></span>
        </a>
    </li> 
     <li>
         <a href="<?php echo $Arr_Main_Menu["contactIndex"] ?>" <?php echo $Arr_Active["contact"]; ?>>
             <span><img style="width: 100%;" src="./images/nav/new/contact.png"></i></span>
         </a>
     </li> 
</ul>
</div>
        <!-- /#sidebar-wrapper -->