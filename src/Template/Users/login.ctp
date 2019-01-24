<h1>Login</h1>

<?php echo $this->Form->create(); ?>
<?php echo $this->Form->control('username'); ?>
<?php echo $this->Form->control('password'); ?>
<?php echo $this->Form->button('Acessar'); ?>
<?php echo $this->Form->end(); ?>