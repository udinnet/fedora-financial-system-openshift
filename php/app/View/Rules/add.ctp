<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Add Rule'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
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
            <legend><?php echo __('Add Rule'); ?></legend>
        <?php
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
            <?php echo $this->Form->submit('Update', array(
                'div' => false,
                'class' => 'btn btn-primary'
            )); ?>
        </div>
    <?php echo $this->Form->end(); ?>
    </div>
</div>