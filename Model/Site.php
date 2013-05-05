a<?php
App::uses('Model', 'Model');

/**
 * Sites model.
 *
 * @package     CakePHP
 * @subpackage  app.Controller
 * @author      C1V0 <chris@spreadthehelp.com>
 */
class Site extends AppModel {

  public $name = 'Site';

  public $recursive = -1;

#  public $belongsTo = array('Account','Template','Content');

  public $belongsTo = 'Account';

  public $hasOne = array('Template','Content');
  
}
