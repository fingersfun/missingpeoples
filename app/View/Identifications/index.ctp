
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Identification'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="identifications index">
		
			<h2><?php echo __('Identifications'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('height'); ?></th>
							<th><?php echo $this->Paginator->sort('weight'); ?></th>
							<th><?php echo $this->Paginator->sort('colorofeyes'); ?></th>
							<th><?php echo $this->Paginator->sort('colorofheir'); ?></th>
							<th><?php echo $this->Paginator->sort('marks'); ?></th>
							<th><?php echo $this->Paginator->sort('type'); ?></th>
							<th><?php echo $this->Paginator->sort('place'); ?></th>
							<th><?php echo $this->Paginator->sort('wearing'); ?></th>
							<th><?php echo $this->Paginator->sort('characteristics'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($identifications as $identification): ?>
	<tr>
		<td><?php echo h($identification['Identification']['id']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['height']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['weight']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['colorofeyes']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['colorofheir']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['marks']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['type']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['place']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['wearing']); ?>&nbsp;</td>
		<td><?php echo h($identification['Identification']['characteristics']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $identification['Identification']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $identification['Identification']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $identification['Identification']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $identification['Identification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->