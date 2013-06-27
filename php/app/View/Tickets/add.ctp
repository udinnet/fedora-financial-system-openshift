<div class="tickets form">
<?php echo $this->Form->create('Ticket'); ?>
	<fieldset>
		<legend><?php echo __('Add Ticket'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('keywords');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('region_id');
        /*foreach ($fields as $field){
            $i = 0;
            echo $field[i];
            $i++;
        }*/
        $count = 0;
        foreach ($fields as $field){
            echo $this->Form->input('FieldAmount.'.$count.'.amount',array('label'=>$field['TicketField']['name'],'type'=>'text'));
            echo $this->Form->hidden('FieldAmount.'.$count.'.ticket_field_id',array('value'=>$field['TicketField']['id']));
            $count++;
        }
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
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Field Amounts'), array('controller' => 'field_amounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field Amount'), array('controller' => 'field_amounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
