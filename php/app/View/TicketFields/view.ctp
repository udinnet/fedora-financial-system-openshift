<div class="ticketFields view">
<h2><?php  echo __('Ticket Field'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ticketField['TicketField']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ticketField['TicketField']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket Field'), array('action' => 'edit', $ticketField['TicketField']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ticket Field'), array('action' => 'delete', $ticketField['TicketField']['id']), null, __('Are you sure you want to delete # %s?', $ticketField['TicketField']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Fields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Field'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rules'); ?></h3>
	<?php if (!empty($ticketField['Rule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cr Account Id'); ?></th>
		<th><?php echo __('Dr Account Id'); ?></th>
		<th><?php echo __('Current State Id'); ?></th>
		<th><?php echo __('Next State Id'); ?></th>
		<th><?php echo __('Ticket Field Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticketField['Rule'] as $rule): ?>
		<tr>
			<td><?php echo $rule['id']; ?></td>
			<td><?php echo $rule['cr_account_id']; ?></td>
			<td><?php echo $rule['dr_account_id']; ?></td>
			<td><?php echo $rule['current_state_id']; ?></td>
			<td><?php echo $rule['next_state_id']; ?></td>
			<td><?php echo $rule['ticket_field_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rules', 'action' => 'view', $rule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rules', 'action' => 'edit', $rule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rules', 'action' => 'delete', $rule['id']), null, __('Are you sure you want to delete # %s?', $rule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($ticketField['Transaction'])): ?>
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
		foreach ($ticketField['Transaction'] as $transaction): ?>
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
	<h3><?php echo __('Related Tickets'); ?></h3>
	<?php if (!empty($ticketField['Ticket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Keywords'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticketField['Ticket'] as $ticket): ?>
		<tr>
			<td><?php echo $ticket['id']; ?></td>
			<td><?php echo $ticket['title']; ?></td>
			<td><?php echo $ticket['keywords']; ?></td>
			<td><?php echo $ticket['description']; ?></td>
			<td><?php echo $ticket['created']; ?></td>
			<td><?php echo $ticket['modified']; ?></td>
			<td><?php echo $ticket['user_id']; ?></td>
			<td><?php echo $ticket['state_id']; ?></td>
			<td><?php echo $ticket['region_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
