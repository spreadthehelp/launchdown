<div class="sites view">
<h2><?php  echo __('Site'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($site['Site']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $site['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($site['Site']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domain'); ?></dt>
		<dd>
			<?php echo h($site['Site']['domain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($site['Site']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Template']['name'], array('controller' => 'templates', 'action' => 'view', $site['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Content']['name'], array('controller' => 'contents', 'action' => 'view', $site['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($site['Site']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($site['Site']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($site['Site']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site'), array('action' => 'edit', $site['Site']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Site'), array('action' => 'delete', $site['Site']['id']), null, __('Are you sure you want to delete # %s?', $site['Site']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
