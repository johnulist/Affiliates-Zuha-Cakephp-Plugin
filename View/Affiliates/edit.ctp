<div class="affiliates form">
<?php echo $this->Form->create('Affiliate');?>
	<fieldset>
 		<legend><?php echo __('Edit Affiliate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('referral_key');
		echo $this->Form->input('user_id');
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
			$this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Affiliate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Affiliate.id'))),
			$this->Html->link(__('List Affiliates', true), array('action' => 'index')),
			$this->Html->link(__('List Users', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')),
			)
		),
	)));
?>