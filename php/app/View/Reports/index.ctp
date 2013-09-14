<?php $this->layout = 'bootstrap2';?>
<?php $this->set('title', 'Reports'); ?>

<h1 align="center">Reporting</h1>

<div class="container">
    <ul class="thumbnails">

        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-money icon-4x\"></i></p>
                <p class=\"text-center\">Account Reports</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'reports', 'action' => 'account'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>
        <li class="span2">
            <?php
            $i = "<p class=\"text-center\"><i class=\"icon-calendar icon-4x\"></i></p>
                <p class=\"text-center\">Quarterly Reports</p>";
            echo $this->Html->link(
                $i,
                array('controller' => 'reports', 'action' => 'quarterly'),
                array(
                    'class' => 'thumbnail',
                    'escape' => false
                )
            );
            ?>
        </li>
    </ul>
</div>