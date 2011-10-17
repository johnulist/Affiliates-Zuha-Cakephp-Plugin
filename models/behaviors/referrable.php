<?php
/**
 * Refferable Behavior
 *
 * @package 	zuha
 * @subpackage 	affiliates.models.behaviors
 */
class ReferrableBehavior extends ModelBehavior {

	/**
	 * Settings array
	 *
	 * @var array
	 */
	public $settings = array();


	/**
	 * Setup
	 *
	 * @param AppModel $Model
	 * @param array $settings
	 * @return void
	 */
	public function setup(Model $Model, $settings = array()) {
		$this->Affiliate = ClassRegistry::init('Affiliate');
	}
	
	/**
	 * Setup model data with the affiliate record for use in aftersave if the model record is successfully saved.
	 *
	 * return {bool}	only false if a key was supplied and it isn't a valid key
	 */
	function beforeSave(&$Model) {
		if (empty($Model->data[$Model->name]['referral_key']) || $Model->data['Affiliate'] = $this->_checkReferralKey($Model->data[$Model->name]['referral_key'])) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * After the referred record has been successfully saved, add the referral credit to the affiliated table.
	 */
	function afterSave(&$Model, $created) {
		# you can only be referred if during creation
		if ($created && !empty($Model->data['Affiliate']['id']) && !empty($Model->id)) {
			$data['Affiliated']['affiliate_id'] = $Model->data['Affiliate']['id'];
			$data['Affiliated']['foreign_key'] = $Model->id;
			$data['Affiliated']['model'] = $Model->name;
			$this->Affiliated = ClassRegistry::init('Affiliates.Affiliated');
			if ($this->Affiliated->save($data)) {
				return true;
			} else {
				return false;
			}
		}
	}
	
	/** 
	 * Does a check on the key, to see if the it is valid.  
	 * 
	 * @param {string} 		The key to check against
	 * @return {mixed}		return the affiliate array data, throw an exception because a key existed but was not found, or return true if the key does not exist, because it means no referral is necessary.
	 */
	function _checkReferralKey($key = null) {
		if (!empty($key)) {
			if ($affiliate = $this->Affiliate->findByReferralKey($key)) {
				return $affiliate['Affiliate'];
			} else {
				throw new Exception(__d('affiliates', 'Invalid Referral Code', true));
			}
		} else {
			# no key was given so just move on, it will not be a referred record.
			return true;
		}
	}
}
