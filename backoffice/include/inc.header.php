<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a id="main-menu-toggle" class="hidden-phone close"><i class="icon-reorder"></i></a>
			<div class="row-fluid">
				<a class="brand span2 noBg" href="index.php?op=home-index" ><span><?php echo $config['web_name'];?></span></a>
			</div>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav pull-right">
					<!-- start: User Dropdown -->
					<li class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
							<div class="user" style="padding-top:10px;">
								<!-- <span class="hello">Welcome!</span> -->
								<span class="name">
									Welcome <strong><a href="index.php?op=account-form&id=<?php echo $_SESSION['ssAdminPremissionsID'];?>"><?php echo $PM_NAME;?></a></strong> | 
									<a href="javascript:;" class="logout" style="color:#FFF;">Logout</a>
								</span>
							</div>
						</a>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
		</div>
	</div>
</div>