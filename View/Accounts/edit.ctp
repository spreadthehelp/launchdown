<?php echo $this->element('sidebar'); ?>

<div class="span9">
<?php echo $this->Form->create('Account'); ?>
	<fieldset>
		<legend><?php echo __('Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('is_active');
		echo $this->Form->input('user_id');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div><!--/.span9 -->