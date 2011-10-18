<div class="affiliates view">
<h2><?php  __('Affiliate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliate['Affiliate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Parent Affiliate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliate['ParentAffiliate']['id'], array('controller' => 'affiliates', 'action' => 'view', $affiliate['ParentAffiliate']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Referral Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliate['Affiliate']['referral_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Affiliate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliate['User']['username'], array('plugin' => null, 'controller' => 'users', 'action' => 'view', $affiliate['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliate['Affiliate']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliate['Affiliate']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Affiliate', true), array('action' => 'edit', $affiliate['Affiliate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Affiliate', true), array('action' => 'delete', $affiliate['Affiliate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliate['Affiliate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliate', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Affiliates');?></h3>
	<?php if (!empty($affiliate['ChildAffiliate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Referral Key'); ?></th>
		<th><?php echo __('Affiliate Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($affiliate['ChildAffiliate'] as $childAffiliate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childAffiliate['id'];?></td>
			<td><?php echo $childAffiliate['parent_id'];?></td>
			<td><?php echo $childAffiliate['referral_key'];?></td>
			<td><?php echo $childAffiliate['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'affiliates', 'action' => 'view', $childAffiliate['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'affiliates', 'action' => 'edit', $childAffiliate['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'affiliates', 'action' => 'delete', $childAffiliate['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childAffiliate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Affiliate', true), array('controller' => 'affiliates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
