<div class="affiliateEarnings form">
<?php echo $this->Form->create('AffiliateEarning');?>
	<fieldset>
 		<legend><?php echo __('Add Affiliate Earning'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('affiliated_id');
		echo $this->Form->input('affiliate_id');
		echo $this->Form->input('creator_id');
		echo $this->Form->input('modifier_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Affiliates',
		'items' => array(
			$this->Html->link(__('List Affiliate Earnings', true), array('action' => 'index')),
			$this->Html->link(__('List Affiliateds', true), array('controller' => 'affiliateds', 'action' => 'index'))),
			$this->Html->link(__('New Affiliated', true), array('controller' => 'affiliateds', 'action' => 'add'))),
			$this->Html->link(__('List Affiliates', true), array('controller' => 'affiliates', 'action' => 'index'))),
			$this->Html->link(__('New Affiliate', true), array('controller' => 'affiliates', 'action' => 'add'))),
			$this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index'))),
			$this->Html->link(__('New Creator', true), array('controller' => 'users', 'action' => 'add')),
			)
		),
	)));
?>