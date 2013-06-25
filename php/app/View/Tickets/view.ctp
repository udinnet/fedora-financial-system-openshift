<div class="tickets view">
<h2><?php  echo __('Ticket'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keywords'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ticket['User']['id'], array('controller' => 'users', 'action' => 'view', $ticket['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ticket['State']['name'], array('controller' => 'states', 'action' => 'view', $ticket['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ticket['Region']['name'], array('controller' => 'regions', 'action' => 'view', $ticket['Region']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket'), array('action' => 'edit', $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ticket'), array('action' => 'delete', $ticket['Ticket']['id']), null, __('Are you sure you want to delete # %s?', $ticket['Ticket']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Fields'), array('controller' => 'ticket_fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Field'), array('controller' => 'ticket_fields', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($ticket['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Ticket Id'); ?></th>
		<th><?php echo __('Ticket Field Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticket['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['amount']; ?></td>
			<td><?php echo $transaction['type']; ?></td>
			<td><?php echo $transaction['time']; ?></td>
			<td><?php echo $transaction['account_id']; ?></td>
			<td><?php echo $transaction['ticket_id']; ?></td>
			<td><?php echo $transaction['ticket_field_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ticket Fields'); ?></h3>
	<?php if (!empty($ticket['TicketField'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticket['TicketField'] as $ticketField): ?>
		<tr>
			<td><?php echo $ticketField['id']; ?></td>
			<td><?php echo $ticketField['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ticket_fields', 'action' => 'view', $ticketField['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ticket_fields', 'action' => 'edit', $ticketField['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ticket_fields', 'action' => 'delete', $ticketField['id']), null, __('Are you sure you want to delete # %s?', $ticketField['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket Field'), array('controller' => 'ticket_fields', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
