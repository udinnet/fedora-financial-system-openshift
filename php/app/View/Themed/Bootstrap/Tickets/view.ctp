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
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ticket['User']['id'], array('controller' => 'users', 'action' => 'view', $ticket['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['owner']); ?>
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
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serialized Data'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['serialized_data']); ?>
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
	</ul>
</div>
