<?php
App::uses('AppModel', 'Model');
/**
 * Account Model
 *
 * @property User $User
 * @property Site $Site
 * @property Template $Template
 * @property User $User
 */
class Account extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
  public $validate = array(
    'user_id' => array(
      'numeric' => array(
        'rule' => array('numeric'),
        //'message' => 'Your custom message here',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
  public $belongsTo = array(
    'User' => array(
      'className' => 'User',
      'foreignKey' => 'user_id',
      'conditions' => '',
      'fields' => '',
      'order' => ''
    )
  );

/**
 * hasMany associations
 *
 * @var array
 */
  public $hasMany = array( /*
    'Site' => array(
      'className' => 'Site',
      'foreignKey' => 'account_id',
      'dependent' => false,
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'exclusive' => '',
      'finderQuery' => '',
      'counterQuery' => ''
    ),  */
    'Template' => array(
      'className' => 'Template',
      'foreignKey' => 'account_id',
      'dependent' => false,
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'exclusive' => '',
      'finderQuery' => '',
      'counterQuery' => ''
    )
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
  public $hasAndBelongsToMany = array(
    'User' => array(
      'className' => 'User',
      'joinTable' => 'accounts_users',
      'foreignKey' => 'account_id',
      'associationForeignKey' => 'user_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
      'deleteQuery' => '',
      'insertQuery' => ''
    )
  );

}
