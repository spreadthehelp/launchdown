<?php echo $this->element('sidebar'); ?>

<div class="span9">
	<div class="accounts index">
		<h3><?php echo __('Accounts'); ?></h3>
		<table class="table table-striped" cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('is_active'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($accounts as $account): ?>
		<tr>
			<td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
			<td><?php echo h($account['Account']['name']); ?>&nbsp;</td>
			<td><?php echo h($account['Account']['is_active']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($account['User']['email'], array('controller' => 'users', 'action' => 'view', $account['User']['id'])); ?>
			</td>
			<td><?php echo h($account['Account']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), array('class'=>'btn btn-mini'), __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<p><small>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?> </small></p>
		<ul class="pager">
		<?php
			echo $this->Paginator->prev('« ' . __('previous'), array('tag' => 'li'), null, array('class' => 'previous disabled pull-left'));
			# echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' »', array('tag' => 'li'), null, array('class' => 'next pull-right'));
		?>
		</ul>
	</div>
</div><!-- /.span9 -->