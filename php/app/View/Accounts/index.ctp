<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Accounts'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
        <h2><?php echo __('Accounts'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-hover">
        <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('bring_fwd'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($accounts as $account): ?>
        <tr>
            <td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
            <td><?php echo h($account['Account']['name']); ?>&nbsp;</td>
            <td><?php echo h($account['Account']['bring_fwd']); ?>&nbsp;</td>
            <td><?php echo h($account['Account']['description']); ?>&nbsp;</td>
            <td class="btn-group">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
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