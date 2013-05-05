<div class="sites form">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php echo __('Add Site'); ?></legend>
	<?php
		echo $this->Form->input('account_id');
		echo $this->Form->input('name');
		echo $this->Form->input('domain');
		echo $this->Form->input('description');
		echo $this->Form->input('template_id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
