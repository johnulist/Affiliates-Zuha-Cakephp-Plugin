<div class="affiliates index">
	<h2><?php echo __('Affiliates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('referral_key');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($affiliates as $affiliate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $affiliate['Affiliate']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($affiliate['ParentAffiliate']['id'], array('controller' => 'affiliates', 'action' => 'view', $affiliate['ParentAffiliate']['id'])); ?>
		</td>
		<td><?php echo $affiliate['Affiliate']['referral_key']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($affiliate['User']['username'], array('controller' => 'users', 'action' => 'view', $affiliate['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $affiliate['Affiliate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $affiliate['Affiliate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $affiliate['Affiliate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliate['Affiliate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Affiliate', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliates', true), array('controller' => 'affiliates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Affiliate', true), array('controller' => 'affiliates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>