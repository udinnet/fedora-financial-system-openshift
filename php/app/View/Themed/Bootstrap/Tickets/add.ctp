<div class="tickets form">
<?php echo $this->Form->create('Ticket'); ?>
	<fieldset>
		<legend><?php echo __('Add Ticket'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('reporter');
		echo $this->Form->input('owner');
		echo $this->Form->input('keywords');
		echo $this->Form->input('description');
		echo $this->Form->input('state');
		echo $this->Form->input('serialized_data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tickets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
