<?php

/**
 * Affiliated model
 *
 * @package zuha
 * @subpackage affiliates.models
 */
class Affiliated extends AffiliatesAppModel {

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = 'Affiliated';

	/**
	 * Table
	 *
	 * @var string
	 */
	public $useTable = 'affiliated';

	public $belongsTo = array(
		'Affiliate' => array(
			'className' => 'Affiliates.Affiliate'));
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array();

	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->validate = array(
			'foreign_key' => array(
				'required' => array(
					'rule' => array(
						'notEmpty'
						),
					'required' => true,
					'allowEmpty' => false,
					'message' => __d('affiliates', 'Foreign key can not be empty', true)
					)
				),
			'affiliate_id' => array(
				'required' => array(
					'rule' => array(
						'notEmpty'
						),
					'required' => true,
					'allowEmpty' => false,
					'message' => __d('affiliates', 'Affiliate id can not be empty', true)
					)
				),
			'model' => array(
				'required' => array(
					'rule' => array(
						'notEmpty'
						),
					'required' => true,
					'allowEmpty' => false,
					'message' => __d('affiliates', 'Model field can not be empty', true)
					)
				)
			);
	}

}
