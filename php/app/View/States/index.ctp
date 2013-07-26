<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Ticket States'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <div class="span9">
        <h2><?php echo __('Ticket States'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-hover">
        <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($states as $state): ?>
        <tr>
            <td><?php echo h($state['State']['id']); ?>&nbsp;</td>
            <td><?php echo h($state['State']['name']); ?>&nbsp;</td>
            <td><?php echo h($state['State']['description']); ?>&nbsp;</td>
            <td class="btn-group">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $state['State']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $state['State']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $state['State']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $state['State']['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
        </table>
        <p>
        <?php
        echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
        <div class="paging">
            <?php echo $this->Paginator->pagination(array(
                'div' => 'pagination pagination-centered'
            )); ?>
        </div>
    </div>
</div>