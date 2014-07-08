<div class="row">
<div class="col-md-12">
<div class="row">
<?php 

echo '<pre>';
print_r($peoples);
echo '</pre>';
	
	foreach($peoples as $people)
	{
			?>
			<a href="">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail published">
								<img src="<?php echo '../'.$people['Person']['picture']; ?>" alt="...">
								<div class="caption">
									<h4><?php echo $people['Person']['name'].' '.$people['Person']['surname']; ?></h4>
									<h5><i class="fa fa-calendar"></i> <?php echo $people['Missingdetail']['date']; ?></h5>
									<h5><i class="fa fa-camera-retro"></i> 0</h5>
								</div>
							</div>
						</div>
					</a>		
			
					
					<?php
	}
?>
</div>
</div>
</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<a href="">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail published">
								<img src="http://placehold.it/170x255" alt="...">
								<div class="caption">
									<h4>Album - 736	</h4>
									<h5><i class="fa fa-calendar"></i> June 11, 2014 13:32 PM									</h5>
									<h5><i class="fa fa-camera-retro"></i> 0</h5>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>