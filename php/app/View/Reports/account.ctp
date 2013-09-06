<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Account Report'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Reports'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>
