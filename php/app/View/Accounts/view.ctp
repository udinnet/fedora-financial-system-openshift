<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'View Account :: '.h($account['Account']['name'])); ?>


<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?> </li>
        </ul>
    </div>

    <div class="span9">
    <h2><?php  echo __('Account'); ?></h2>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($account['Account']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($account['Account']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Bring Fwd'); ?></dt>
            <dd>
                <?php echo h($account['Account']['bring_fwd']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Description'); ?></dt>
            <dd>
                <?php echo h($account['Account']['description']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>
</div>
<hr/>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
        <h3><?php echo __('Related Transactions'); ?></h3>
        <?php if (!empty($account['Transaction'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-bordered table-hover">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Amount'); ?></th>
                    <th><?php echo __('Type'); ?></th>
                    <th><?php echo __('Time'); ?></th>
                    <th><?php echo __('Account Id'); ?></th>
                    <th><?php echo __('Ticket Id'); ?></th>
                    <th><?php echo __('Ticket Field Id'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($account['Transaction'] as $transaction): ?>
                    <tr>
                        <td><?php echo $transaction['id']; ?></td>
                        <td><?php echo $transaction['amount']; ?></td>
                        <td><?php echo $transaction['type']; ?></td>
                        <td><?php echo $transaction['time']; ?></td>
                        <td><?php echo $transaction['account_id']; ?></td>
                        <td><?php echo $transaction['ticket_id']; ?></td>
                        <td><?php echo $transaction['ticket_field_id']; ?></td>
                        <td class="btn-group">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>