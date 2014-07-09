<div class="row">
<div class="col-md-12">
<div class="row">
<?php 

//echo '<pre>';
//print_r($peoples);
//echo '</pre>';
	
	foreach($peoples as $people)
	{
		//echo '<li>';
		//echo $this->Html->link(
		//	$this->Html->image($people['Person']['picture']).$this->Html->tag('h4',$people['Person']['name'].' '.$people['Person']['surname']), array('controller'=>'reportings','action'=>'viewReport',$people['Person']['id']), array('escape' => false)
		//);		
		//echo '</li>';
			?>
			
			
			<a href="<?php echo $this->Html->url(array('controller'=>'reportings','action'=>'viewReport',$people['Person']['id'])) ; ?>">
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail published">								
								<?php echo $this->Html->image($people['Person']['picture']); ?>
								<div class="caption">
									
									<h3><b><i class="fa fa-user"></i>  </b><?php echo $people['Person']['name'].' '.$people['Person']['surname']; ?></h3>
									<h4><b><i class="fa fa-calendar"></i>   </b><?php echo $people['Missingdetail']['date']; ?> </h4>
									<h4><b><i class="fa fa-phone"></i>  </b><?php echo $people['Contact']['phone']; ?>      </h4>
									
								</div>
							</div>
						</div>
					</a>		
			
					
					<?php
	}
?>

</div>
</div>
<div align="center">
<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
</div>
</div>
