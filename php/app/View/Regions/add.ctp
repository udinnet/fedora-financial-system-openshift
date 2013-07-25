<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Add Account'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('List Regions'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <div class="span9">
    <?php echo $this->Form->create('Region',array(
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
            <legend><?php echo __('Add Region'); ?></legend>
        <?php
            echo $this->Form->input('name',array(
                'class' => 'span6'
            ));
            echo $this->Form->input('short_name',array(
                'class' => 'span6'
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
