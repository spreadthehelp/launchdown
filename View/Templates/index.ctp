<?php echo $this->element('sidebar'); ?>

<div class="span9">
	<h2><?php echo __('Templates'); ?></h2>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templates as $template): ?>
	<tr>
		<td><?php echo h($template['Template']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($template['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $template['Account']['id'])); ?>
		</td>
		<td><?php echo h($template['Template']['name']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['slug']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $template['Template']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $template['Template']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $template['Template']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p> <small>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?> </small>	</p>
	<ul class="pager">
		<?php
			echo $this->Paginator->prev('« ' . __('previous'), array('tag' => 'li'), null, array('class' => 'previous disabled pull-left'));
			# echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' »', array('tag' => 'li'), null, array('class' => 'next pull-right'));
		?>
	</ul><!-- /.pager -->
</div><!-- /.span9 -->