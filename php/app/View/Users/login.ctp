<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title', 'Login'); ?>
<h2>Login</h2>
<?php
echo $this->Form->create(array('novalidate' => true));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>