<?php $this->layout = 'bootstrap2';?>
<?php $this->set('title', 'Account-wise Report'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Reports'), array('action' => 'index')); ?></li>
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
        <legend><?php echo __('Generate Account-wise Report'); ?></legend>
        <?php
        echo $this->Form->select('account',$accounts,array(
            'class' => 'span3'
        ));
        ?>
        <div class="form-actions">
            <?php echo $this->Form->submit('Generate Report', array(
                'div' => false,
                'class' => 'btn btn-primary'
            )); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
