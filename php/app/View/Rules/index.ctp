<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Accounting Rules'); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Rule'), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <div class="span9">
        <h2><?php echo __('Accounting Rules'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-hover">
        <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('cr_account_id'); ?></th>
                <th><?php echo $this->Paginator->sort('dr_account_id'); ?></th>
                <th><?php echo $this->Paginator->sort('current_state_id'); ?></th>
                <th><?php echo $this->Paginator->sort('next_state_id'); ?></th>
                <th><?php echo $this->Paginator->sort('ticket_field_id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($rules as $rule): ?>
        <tr>
            <td><?php echo h($rule['Rule']['id']); ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($rule['CrAccount']['name'], array('controller' => 'accounts', 'action' => 'view', $rule['CrAccount']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($rule['DrAccount']['name'], array('controller' => 'accounts', 'action' => 'view', $rule['DrAccount']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($rule['CurrentState']['name'], array('controller' => 'states', 'action' => 'view', $rule['CurrentState']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($rule['NextState']['name'], array('controller' => 'states', 'action' => 'view', $rule['NextState']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($rule['TicketField']['name'], array('controller' => 'ticket_fields', 'action' => 'view', $rule['TicketField']['id'])); ?>
            </td>
            <td class="btn-group">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $rule['Rule']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rule['Rule']['id']),array('class' => 'btn')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rule['Rule']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $rule['Rule']['id'])); ?>
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
