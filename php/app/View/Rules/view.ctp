<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'View Rule :: '. h($rule['Rule']['id'])); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Edit Rule'), array('action' => 'edit', $rule['Rule']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Rule'), array('action' => 'delete', $rule['Rule']['id']), null, __('Are you sure you want to delete # %s?', $rule['Rule']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Rules'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Rule'), array('action' => 'add')); ?> </li>
        </ul>
    </div>

    <div class="span9">
    <h2><?php  echo __('Rule'); ?></h2>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($rule['Rule']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Cr Account'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rule['CrAccount']['name'], array('controller' => 'accounts', 'action' => 'view', $rule['CrAccount']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Dr Account'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rule['DrAccount']['name'], array('controller' => 'accounts', 'action' => 'view', $rule['DrAccount']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Current State'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rule['CurrentState']['name'], array('controller' => 'states', 'action' => 'view', $rule['CurrentState']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Next State'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rule['NextState']['name'], array('controller' => 'states', 'action' => 'view', $rule['NextState']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Ticket Field'); ?></dt>
            <dd>
                <?php echo $this->Html->link($rule['TicketField']['name'], array('controller' => 'ticket_fields', 'action' => 'view', $rule['TicketField']['id'])); ?>
                &nbsp;
            </dd>
        </dl>
    </div>
</div>