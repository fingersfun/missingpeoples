
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Identification'), array('action' => 'edit', $identification['Identification']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Identification'), array('action' => 'delete', $identification['Identification']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $identification['Identification']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Identifications'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Identification'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="identifications view">

			<h2><?php  echo __('Identification'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Height'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['height']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Weight'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['weight']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Colorofeyes'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['colorofeyes']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Colorofheir'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['colorofheir']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Marks'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['marks']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Place'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['place']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Wearing'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['wearing']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Characteristics'); ?></strong></td>
		<td>
			<?php echo h($identification['Identification']['characteristics']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related People'); ?></h3>
				
				<?php if (!empty($identification['Person'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Identification Id'); ?></th>
		<th><?php echo __('Missingdetail Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($identification['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['surname']; ?></td>
			<td><?php echo $person['sex']; ?></td>
			<td><?php echo $person['dob']; ?></td>
			<td><?php echo $person['picture']; ?></td>
			<td><?php echo $person['identification_id']; ?></td>
			<td><?php echo $person['missingdetail_id']; ?></td>
			<td><?php echo $person['status']; ?></td>
			<td><?php echo $person['created']; ?></td>
			<td><?php echo $person['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
