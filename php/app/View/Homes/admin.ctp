<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Admin Home'); ?>

<h1 align="center">FFS Admin panel</h1>

<div class="container">
    <ul class="thumbnails">

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-user icon-4x\"></i></p>
                <p class=\"text-center\">Users</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'users', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-usd icon-4x\"></i></p>
                <p class=\"text-center\">Accounts</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'accounts', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-ticket icon-4x\"></i></p>
                <p class=\"text-center\">Tickets</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'tickets', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-globe icon-4x\"></i></p>
                <p class=\"text-center\">Regions</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'regions', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-legal icon-4x\"></i></p>
                <p class=\"text-center\">Accounting Rules</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'rules', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-ok-circle icon-4x\"></i></p>
                <p class=\"text-center\">Ticket States</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'states', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-reorder icon-4x\"></i></p>
                <p class=\"text-center\">Cost Breakdown Fields</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'ticket_fields', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>
        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-file-text icon-4x\"></i></p>
                <p class=\"text-center\">Reporting</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'reports', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>
        <hr/>
        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-cogs icon-4x\"></i></p>
                <p class=\"text-center\">Configuration</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'configurations', 'action' => 'index'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>
    </ul>
</div>
