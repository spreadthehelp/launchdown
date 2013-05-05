<?php echo $this->element('sidebar'); ?>

<div class="span9">
	<h2><?php echo __('Your Content'); ?></h2>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_published'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contents as $content): ?>
	<tr>
		<td><?php echo h($content['Content']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($content['Site']['name'], array('controller' => 'sites', 'action' => 'view', $content['Site']['id'])); ?>
		</td>
		<td><?php echo h($content['Content']['name']); ?>&nbsp;</td>
		<td><?php echo h($content['Content']['is_published']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $content['Content']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $content['Content']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?>
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
		</ul>
	</div>
</div><!-- /.span9 -->