<div id="page-content" >
<div id="page-container" class="row">
	<div id="page-content" class="">
		
		<div class="users view">

			<h4><?php  echo __('User'); ?></h4>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Firstname'); ?></strong></td>
		<td>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Lastname'); ?></strong></td>
		<td>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Displayname'); ?></strong></td>
		<td>
			<?php echo h($user['User']['displayname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone'); ?></strong></td>
		<td>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>				</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h4><?php echo __('Related People'); ?></h4>
				
				<?php if (!empty($user['Person'])): 				
				?>
					
					
					
					<div class="">						
							
									<?php
										$i = 0;
										foreach ($user['Person'] as $person): 										
										?>
										
		<a href="<?php echo $this->Html->url(array('controller'=>'reportings','action'=>'viewReport',$person['id'])) ; ?>">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail published">								
								<?php echo $this->Html->image($person['picture']); ?>
								<div class="caption">									
									<h3><b><i class="fa fa-user"></i>  </b><?php echo $person['name'].' '.$person['surname']; ?></h3>
									<h4><b><i class="fa fa-calendar"></i>   </b><?php echo $person['Missingdetail']['date']; ?> </h4>
									<h4><b><i class="fa fa-phone"></i>  </b><?php echo $person['Contact']['phone']; ?>      </h4>									
								</div>
							</div>
						</div>
					</a>
	<?php endforeach; ?>
							
						
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
</div>