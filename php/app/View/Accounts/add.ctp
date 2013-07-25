<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Add Account'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="span9">
    <?php echo $this->Form->create('Account',array(
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
            <legend><?php echo __('Add Account'); ?></legend>
        <?php
            echo $this->Form->input('name',array(
                'class' => 'span6'
            ));
        echo $this->Form->input('description',array(
            'class' => 'span6'
        ));
            echo $this->Form->input('bring_fwd',array(
                'class' => 'checkbox inline',
                'div' => false,
                'label' => false,
                'before' => '<label class="control-label">Brought Forward?</label>',
                'wrapInput' => 'controls',
                'afterInput' => '<span class="help-block"></span>'
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
