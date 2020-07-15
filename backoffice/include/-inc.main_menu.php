			<div id="sidebar-left" class="span3" style="display:none;" >
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-dashboard"></i><span class="hidden-tablet">Dashboard</span></a></li>	
						
						<!-- <li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Banner</span></a>
							<ul>
								<li><a href="index.php?op=home-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Banner Slide  </span></a></li>
								<li><a href="index.php?op=home-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Sub-Banner Slide </span></a></li>
							</ul>	
						</li> -->	

						<li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Membership</span></a>
							<ul>
								<li><a href="index.php?op=member_website-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Members Website  </span></a></li>
								<li><a href="index.php?op=member_cm-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> CM Members </span></a></li>
								<li><a href="index.php?op=member_om-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> OM Members </span></a></li>
							</ul>	
						</li>	

						<li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Management Development</span></a>
							<ul>
								<li><a href="index.php?op=management_development_program-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Management Development Program  </span></a></li>
								<li><a href="index.php?op=public_training-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Public Training </span></a></li>
								<li><a href="index.php?op=in_company_training-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> In Company Training </span></a></li>
								<li><a href="index.php?op=research_and_consulting-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Research and Consulting Services </span></a></li>
								<li><a href="index.php?op=benefits_and_salary_survey-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Research and Salary Survey Project</span></a></li>
								<li><a href="index.php?op=benefits_and_salary_survey_report-index"><i class="icon-angle-right"></i><span class="hidden-tablet"> Research and Salary Survey Reports</span></a></li>
							</ul>	
						</li>	
						<li class="maindropmenu">
							<a href="index.php?op=excellence_projects-index"><i class="icon-circle"></i><span class="hidden-tablet">Excellence Projects</span></a>
						</li>
						<li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Management Group</span></a>
							<ul>
								<li><a href="index.php?op=content-index&id=5"><i class="icon-angle-right"></i><span class="hidden-tablet">Overview</span></a></li>
								<li><a href="index.php?op=banner_management_groups-index"><i class="icon-angle-right"></i><span class="hidden-tablet">Banner</span></a></li>
								<li><a href="index.php?op=management_groups_category-index"><i class="icon-angle-right"></i><span class="hidden-tablet">Management Groups</span></a></li>
							</ul>	
						</li>

						<!-- <li><a href="index.php?op=excellence_projects-index"><i class="icon-circle"></i><span class="hidden-tablet">Excellence Projects</span></a></li>	 -->
						<!-- <li><a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Knowledge Sharing</span></a></li>	 -->
						<!-- <li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">News</span></a>
							<ul>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> TMA News  </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Other News </span></a></li>
							</ul>	
						</li> -->	
						
						<!-- <li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">About US</span></a>
							<ul>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Mission & Vision  </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> TMA Board of trustees </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> TMA Council & Knowledge Advisory </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Organization Chart </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Room & Facilities Service </span></a></li>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Yuthasar Na Nagara Foundation For TMA </span></a></li>
							</ul>	
						</li> -->
						<!-- <li><a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Invoice</span></a></li>	 -->
						<li class="maindropmenu">
							<a href="#"><i class="icon-circle"></i><span class="hidden-tablet">Settings</span></a>
							<ul>
								<li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Users  </span></a></li>
								<!-- <li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> SEO Management </span></a></li> -->
								<!-- <li><a href="#"><i class="icon-angle-right"></i><span class="hidden-tablet"> Short News </span></a></li> -->
							</ul>	
						</li>						
						<li><a href="javascript:;" class="logout"><i class="icon-lock"></i><span class="hidden-tablet">Logout</span></a></li>	
					</ul>
				</div>
			</div>
<style>
	.main-menu li a{
		color: #FFF;
	}
</style>
<script>
	
	$(document).delegate('.maindropmenu', 'click', function(event) {
		$('.maindropmenu').children('ul').hide();
		$(this).children('ul').show();
	});

	$(document).delegate('.sub_dropmenu', 'click', function(event) {
		$('.sub_dropmenu').find('ul').hide();
		$(this).find('ul').show();
	});
</script>