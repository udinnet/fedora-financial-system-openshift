<div class="tickets index">
	<h2><?php echo __('Tickets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('reporter'); ?></th>
			<th><?php echo $this->Paginator->sort('owner'); ?></th>
			<th><?php echo $this->Paginator->sort('keywords'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('serialized_data'); ?>-->
			<!--<th><?php echo $this->Paginator->sort('created'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tickets as $ticket): ?>
	<tr>
		<td><?php echo h($ticket['Ticket']['id']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ticket['User']['id'], array('controller' => 'users', 'action' => 'view', $ticket['User']['id'])); ?>
		</td>
		<td><?php echo h($ticket['Ticket']['owner']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['keywords']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['description']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['state']); ?>&nbsp;</td>
		<!--<td><?php echo h($ticket['Ticket']['serialized_data']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($ticket['Ticket']['created']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($ticket['Ticket']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ticket['Ticket']['id']), null, __('Are you sure you want to delete # %s?', $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ticket'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
