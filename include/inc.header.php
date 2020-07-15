<script>
    
        $(document).delegate('.chk_lang', 'click', function(event) {
              var data_id = $(this).attr('data-id');
              // if(confirm("Are you sure you want to move ?")) {
                $.post('action.php', {
                  'action' : 'chk_lang',
                  'data_id' : data_id
                }, function(response) {
                    //console.log(response);
                    window.location.reload();
                });
              // }
});

</script>
<!-- TOPBAR -->
<div id="topbar" class="topbar">
	<div class="container">
		<div id="logo">
				<!--<a href="<?php echo $Arr_Main_Menu["homeIndex"];?>" class="logo" data-dark-logo="images/logo-dark.png">-->
				<a href="#menu-toggle" class="logo" id="menu-toggle">
					<img src="images/logo.png" alt="Polo Logo">
				</a>
				
		</div>
		<div class="row">
			<div class="col-sm-6 topbar-call"></div>
			<div class="col-sm-6 topbar-flag hidden-xs">
				<div id="navigation-bar" class="col-md-12 clearfix text-right">   
					<ul>
						<li class="top-language">
							<span style="">Tel: <a style="color: inherit; text-decoration: none;" href="tel:02-750-3595">+66-2-750-3595  &nbsp;</a>
							<a href="#" id="lang_th" data-id="th" class="chk_lang">TH</a> | 
							<a href="#" id="lang_en" class="chk_lang" data-id="en" >EN</a></li>
						<!-- <li>
							<form id="search" action="#" method="post">
								<div id="label"><label for="search-terms" id="search-label">search</label></div>
								<div id="input"><input type="text" name="search-terms" id="search-terms" placeholder="Start typing & press  &quot;Enter&quot;"></div>
							</form>
						</li> -->
					</ul>				            
				</div>				
			</div>				
		</div>
	</div>
	
<!-- END: TOPBAR -->
</div>