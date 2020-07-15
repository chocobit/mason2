<div class="row p-b-20 p-t-20">
	<nav class="text-center">
		<ul class="pagination pagination-rounded">
			<li> <a href="index.php?op=<?php echo $opURL?><?php echo $param;?>&p=<?php echo $arrPage['previous'];?>" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a> </li>
			<?php 
			for($p=0; $p<count($arrPage['pages']); $p++){ 
				$activepages = ($arrPage['pages'][$p]==$arrPage['current']) ? "active" : ""; 
				?>
				<li class="<?php echo $activepages;?>"><a href="index.php?op=<?php echo $opURL?><?php echo $param;?>&p=<?php echo $arrPage['pages'][$p];?>"><?php echo $arrPage['pages'][$p];?></a></li>
			<?php } ?>
			<li> <a href="index.php?op=<?php echo $opURL?><?php echo $param;?>&p=<?php echo $arrPage['last'];?>" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a> </li>
		</ul>
	</nav>	
</div>