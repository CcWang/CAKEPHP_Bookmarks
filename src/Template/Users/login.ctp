<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
<button><?= $this->Html->link(__('Register'),['controller'=>'Users', 'action'=>'add']) ?></button>

