<div class="rules form">
<?php echo $this->Form->create('Rule'); ?>
	<fieldset>
		<legend><?php echo __('Add Rule'); ?></legend>
	<?php
		echo $this->Form->input('cr_account_id');
		echo $this->Form->input('dr_account_id');
		echo $this->Form->input('current_state_id');
		echo $this->Form->input('next_state_id');
		echo $this->Form->input('ticket_field_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cr Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Current State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Fields'), array('controller' => 'ticket_fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Field'), array('controller' => 'ticket_fields', 'action' => 'add')); ?> </li>
	</ul>
</div>
