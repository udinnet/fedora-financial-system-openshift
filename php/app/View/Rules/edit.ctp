<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Edit Rule'); ?>

<div class="row">
    <div class="span3">
        <h3><?php echo __('Actions'); ?></h3>
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rule.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rule.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Rules'), array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="span9">
    <?php echo $this->Form->create('Rule',array(
        'novalidate' => true,
        'inputDefaults' => array(
            'div' => 'control-group',
            'label' => array(
                'class' => 'control-label'
            ),
            'wrapInput' => 'controls'
        ),
        'class' => 'well form-horizontal'
    )); ?>
            <legend><?php echo __('Edit Rule'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('cr_account_id',array(
                'class' => 'span3'
            ));
            echo $this->Form->input('dr_account_id',array(
                'class' => 'span3'
            ));
            echo $this->Form->input('current_state_id',array(
                'class' => 'span3'
            ));
            echo $this->Form->input('next_state_id',array(
                'class' => 'span3'
            ));
            echo $this->Form->input('ticket_field_id',array(
                'class' => 'span3'
            ));
        ?>
        <div class="form-actions">
            <?php echo $this->Form->submit('Save', array(
                'div' => false,
                'class' => 'btn btn-primary'
            )); ?>
        </div>
    <?php echo $this->Form->end(); ?>
    </div>
</div>