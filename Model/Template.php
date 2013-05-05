<?php
App::uses('Model', 'Model');

/**
 * Templates model.
 *
 * @package     CakePHP
 * @subpackage  app.Controller
 * @author      C1V0 <chris@spreadthehelp.com>
 */
class Template extends AppModel {

  public $name = 'Template';

  public $belongsTo = array('Account');
  
}
