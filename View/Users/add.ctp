<?php echo $this->element('sidebar'); ?>

<div class="span9">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('password');
		echo $this->Form->input('email_verified');
		echo $this->Form->input('tos_accepted');
		echo $this->Form->input('is_active');
		echo $this->Form->input('Account');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div><!-- /.span9 -->