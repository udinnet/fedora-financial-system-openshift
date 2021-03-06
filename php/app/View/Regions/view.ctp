<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'View Account :: '.h($region['Region']['name'])); ?>

<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('Edit Region'), array('action' => 'edit', $region['Region']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Region'), array('action' => 'delete', $region['Region']['id']), null, __('Are you sure you want to delete # %s?', $region['Region']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Regions'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Region'), array('action' => 'add')); ?> </li>
        </ul>
    </div>
    <div class="span9">
    <h2><?php  echo __('Region'); ?></h2>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($region['Region']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($region['Region']['name']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Short Name'); ?></dt>
            <dd>
                <?php echo h($region['Region']['short_name']); ?>
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
        <?php if (!empty($region['Ticket'])): ?>
            <table cellpadding = "0" cellspacing = "0" class="table table-bordered table-hover">
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
                foreach ($region['Ticket'] as $ticket): ?>
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
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>