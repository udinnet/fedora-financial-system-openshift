<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'View Rule :: '. h($state['State']['name'])); ?>

<div class="row">
    <div class="span3">
        <h3><?php echo __('Actions'); ?></h3>
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
    <h2><?php  echo __('State'); ?></h2>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($state['State']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($state['State']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Description'); ?></dt>
            <dd>
                <?php echo h($state['State']['description']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>
</div>

<hr/>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
        <h3><?php echo __('Related Tickets'); ?></h3>
        <?php if (!empty($state['Ticket'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-hover">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Title'); ?></th>
                    <th><?php echo __('Keywords'); ?></th>
                    <th><?php echo __('Description'); ?></th>
                    <th><?php echo __('Created'); ?></th>
                    <th><?php echo __('Modified'); ?></th>
                    <th><?php echo __('User Id'); ?></th>
                    <th><?php echo __('State Id'); ?></th>
                    <th><?php echo __('Region Id'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($state['Ticket'] as $ticket): ?>
                    <tr>
                        <td><?php echo $ticket['id']; ?></td>
                        <td><?php echo $ticket['title']; ?></td>
                        <td><?php echo $ticket['keywords']; ?></td>
                        <td><?php echo $ticket['description']; ?></td>
                        <td><?php echo $ticket['created']; ?></td>
                        <td><?php echo $ticket['modified']; ?></td>
                        <td><?php echo $ticket['user_id']; ?></td>
                        <td><?php echo $ticket['state_id']; ?></td>
                        <td><?php echo $ticket['region_id']; ?></td>
                        <td class="btn-group">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']),array('class' => 'btn'), __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>

<hr/>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Current'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
        <h3><?php echo __('Related Rules as in Next'); ?></h3>
        <?php if (!empty($state['Current'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-hover">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Cr Account Id'); ?></th>
                    <th><?php echo __('Dr Account Id'); ?></th>
                    <th><?php echo __('Current State Id'); ?></th>
                    <th><?php echo __('Next State Id'); ?></th>
                    <th><?php echo __('Ticket Field Id'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($state['Current'] as $current): ?>
                    <tr>
                        <td><?php echo $current['id']; ?></td>
                        <td><?php echo $current['cr_account_id']; ?></td>
                        <td><?php echo $current['dr_account_id']; ?></td>
                        <td><?php echo $current['current_state_id']; ?></td>
                        <td><?php echo $current['next_state_id']; ?></td>
                        <td><?php echo $current['ticket_field_id']; ?></td>
                        <td class="btn-group">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'rules', 'action' => 'view', $current['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'rules', 'action' => 'edit', $current['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rules', 'action' => 'delete', $current['id']),array('class' => 'btn'), __('Are you sure you want to delete # %s?', $current['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>

<hr/>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('New Next'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
        <h3><?php echo __('Related Rules as in Current'); ?></h3>
        <?php if (!empty($state['Next'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-hover">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Cr Account Id'); ?></th>
                    <th><?php echo __('Dr Account Id'); ?></th>
                    <th><?php echo __('Current State Id'); ?></th>
                    <th><?php echo __('Next State Id'); ?></th>
                    <th><?php echo __('Ticket Field Id'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($state['Next'] as $next): ?>
                    <tr>
                        <td><?php echo $next['id']; ?></td>
                        <td><?php echo $next['cr_account_id']; ?></td>
                        <td><?php echo $next['dr_account_id']; ?></td>
                        <td><?php echo $next['current_state_id']; ?></td>
                        <td><?php echo $next['next_state_id']; ?></td>
                        <td><?php echo $next['ticket_field_id']; ?></td>
                        <td class="btn-group">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'rules', 'action' => 'view', $next['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'rules', 'action' => 'edit', $next['id']),array('class' => 'btn')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rules', 'action' => 'delete', $next['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $next['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>