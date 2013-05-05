<?php echo $this->element('sidebar'); ?>

<div class="span9">
<h3><?php  echo __('Account Details'); ?></h2>
	
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($account['Account']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($account['User']['email'], array('controller' => 'users', 'action' => 'view', $account['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($account['Account']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($account['Account']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php /**
<div class="related">
	<h3><?php echo __('Related Sites'); ?></h3>
	<?php if (!empty($account['Site'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Domain'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Template Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['Site'] as $site): ?>
		<tr>
			<td><?php echo $site['id']; ?></td>
			<td><?php echo $site['account_id']; ?></td>
			<td><?php echo $site['name']; ?></td>
			<td><?php echo $site['domain']; ?></td>
			<td><?php echo $site['description']; ?></td>
			<td><?php echo $site['template_id']; ?></td>
			<td><?php echo $site['content_id']; ?></td>
			<td><?php echo $site['is_active']; ?></td>
			<td><?php echo $site['created']; ?></td>
			<td><?php echo $site['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sites', 'action' => 'view', $site['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sites', 'action' => 'edit', $site['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sites', 'action' => 'delete', $site['id']), null, __('Are you sure you want to delete # %s?', $site['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Templates'); ?></h3>
	<?php if (!empty($account['Template'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Is Premium'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['Template'] as $template): ?>
		<tr>
			<td><?php echo $template['id']; ?></td>
			<td><?php echo $template['account_id']; ?></td>
			<td><?php echo $template['name']; ?></td>
			<td><?php echo $template['slug']; ?></td>
			<td><?php echo $template['is_premium']; ?></td>
			<td><?php echo $template['is_active']; ?></td>
			<td><?php echo $template['created']; ?></td>
			<td><?php echo $template['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, __('Are you sure you want to delete # %s?', $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($account['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Tos Accepted'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email_verified']; ?></td>
			<td><?php echo $user['tos_accepted']; ?></td>
			<td><?php echo $user['is_active']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

*/ ?>

	<div class="span12 pagination-centered">
		<?php echo $this->Html->link(__('Add New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-success pull-right')); ?> 
	</div><!-- /.actions -->
</div><!-- /.accounts .view -->