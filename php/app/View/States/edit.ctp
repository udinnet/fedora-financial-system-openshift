<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Edit Ticket State'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('State.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('State.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="span9">
    <?php echo $this->Form->create('State',array(
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
        <fieldset>
            <legend><?php echo __('Edit State'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array(
                'class' => 'span6'
            ));
            echo $this->Form->input('description',array(
                'class' => 'span6'
            ));
        ?>
        </fieldset>
        <div class="form-actions">
            <?php echo $this->Form->submit('Update', array(
                'div' => false,
                'class' => 'btn btn-primary'
            )); ?>
        </div>
    <?php echo $this->Form->end(); ?>
    </div>

</div>