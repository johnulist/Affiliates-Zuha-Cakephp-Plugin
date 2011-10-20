<div class="affiliateEarnings view">
<h2><?php  __('Affiliate Earning');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliateEarning['AffiliateEarning']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliateEarning['AffiliateEarning']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliateEarning['AffiliateEarning']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Affiliated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliateEarning['Affiliated']['id'], array('controller' => 'affiliateds', 'action' => 'view', $affiliateEarning['Affiliated']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Affiliate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliateEarning['Affiliate']['id'], array('controller' => 'affiliates', 'action' => 'view', $affiliateEarning['Affiliate']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Creator'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliateEarning['Creator']['username'], array('controller' => 'users', 'action' => 'view', $affiliateEarning['Creator']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($affiliateEarning['Modifier']['username'], array('controller' => 'users', 'action' => 'view', $affiliateEarning['Modifier']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliateEarning['AffiliateEarning']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $affiliateEarning['AffiliateEarning']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Affiliate Earning', true), array('action' => 'edit', $affiliateEarning['AffiliateEarning']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Affiliate Earning', true), array('action' => 'delete', $affiliateEarning['AffiliateEarning']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $affiliateEarning['AffiliateEarning']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliate Earnings', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliate Earning', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliateds', true), array('controller' => 'affiliateds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliated', true), array('controller' => 'affiliateds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Affiliates', true), array('controller' => 'affiliates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliate', true), array('controller' => 'affiliates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creator', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
