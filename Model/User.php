<?php
App::uses('Model', 'Model');

/**
 * User model.
 *
 * @package     CakePHP
 * @subpackage  app.Controller
 * @author      C1V0 <chris@spreadthehelp.com>
 */
class User extends Model {

  public $displayField = 'email';

  public $hasAndBelongsToMany = array(
      'Account' =>
          array(
              'className'              => 'Account',
              'joinTable'              => 'accounts_users',
              'unique'                 => true,
              'fields'                 => '',
              'order'                  => '',
              'limit'                  => '',
              'offset'                 => '',
              'finderQuery'            => '',
              'deleteQuery'            => '',
              'insertQuery'            => ''
          )
  );

}
