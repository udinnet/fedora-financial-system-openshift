<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Home'); ?>

<h2>Welcome to FFS (Fedora Financial System)</h2>
<?php

 if($current_user){
     echo $this->Html->link(__('Go to backend'),array('controller'=>'backend','action'=>'home'));
 }
?>