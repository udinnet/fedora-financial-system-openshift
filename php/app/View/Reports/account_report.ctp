<?php $this->layout = 'bootstrap2';?>
<?php $this->set('title', 'Account-wise Report'); ?>
<div class="row">
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('All Reports'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Account Reports'), array('action' => 'account')); ?></li>
        </ul>
    </div>
    <div class="span9">
        <table cellpadding="0" cellspacing="0" class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Ticket ID</th>
                <th>Debit</th>
                <th>Credit</th>
            </tr>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?php echo h($transaction['Transaction']['id']); ?>&nbsp;</td>
                    <td><?php echo h($transaction['Transaction']['time']); ?>&nbsp;</td>
                    <td><?php echo h($transaction['Transaction']['ticket_id']); ?>&nbsp;</td>
                    <?php if($transaction['Transaction']['type']=='d'): ?>
                        <td><?php echo h($transaction['Transaction']['amount']); ?>&nbsp;</td>
                        <td><?php echo h(""); ?>&nbsp;</td>
                    <?php elseif($transaction['Transaction']['type']=='c'): ?>
                        <td><?php echo h(""); ?>&nbsp;</td>
                        <td><?php echo h($transaction['Transaction']['amount']); ?>&nbsp;</td>
                    <?php endif;?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>