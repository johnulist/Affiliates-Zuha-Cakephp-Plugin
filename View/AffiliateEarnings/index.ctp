<div class="affiliateEarnings index">
	<h2><?php echo __('Affiliate Earnings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('affiliated_id');?></th>
			<th><?php echo $this->Paginator->sort('affiliate_id');?></th>
			<th><?php echo $this->Paginator->sort('creator_id');?></th>
			<th><?php echo $this->Paginator->sort('modifier_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($affiliateEarnings as $affiliateEarning):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $affiliateEarning['AffiliateEarning']['id']; ?>&nbsp;</td>
		<td><?php echo $affiliateEarning['AffiliateEarning']['name']; ?>&nbsp;</td>
		<td><?php echo $affiliateEarning['AffiliateEarning']['amount']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($affiliateEarning['Affiliated']['id'], array('controller' => 'affiliateds', 'action' => 'view', $affiliateEarning['Affiliated']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($affiliateEarning['Affiliate']['id'], array('controller' => 'affiliates', 'action' => 'view', $affiliateEarning['Affiliate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($affiliateEarning['Creator']['username'], array('controller' => 'users', 'action' => 'view', $affiliateEarning['Creator']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($affiliateEarning['Modifier']['username'], array('controller' => 'users', 'action' => 'view', $affiliateEarning['Modifier']['id'])); ?>
		</td>
		<td><?php echo $affiliateEarning['AffiliateEarning']['created']; ?>&nbsp;</td>
		<td><?php echo $affiliateEarning['AffiliateEarning']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $affiliateEarning['AffiliateEarning']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $affiliateEarning['AffiliateEarning']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $affiliateEarning['AffiliateEarning']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliateEarning['AffiliateEarning']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Affiliate Earning', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliateds', true), array('controller' => 'affiliateds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliated', true), array('controller' => 'affiliateds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliates', true), array('controller' => 'affiliates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliate', true), array('controller' => 'affiliates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creator', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>