<div class="ticketFields form">
<?php echo $this->Form->create('TicketField'); ?>
	<fieldset>
		<legend><?php echo __('Add Ticket Field'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ticket Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Field Amounts'), array('controller' => 'field_amounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field Amount'), array('controller' => 'field_amounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
