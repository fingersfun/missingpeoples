
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Contact'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="contacts view">

			<h2><?php  echo __('Contact'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Surname'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['surname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Relation'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['relation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('City'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['city']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('District'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['district']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('State'); ?></strong></td>
		<td>
			<?php echo h($contact['Contact']['state']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
