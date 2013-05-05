<?php
App::uses('Model', 'Model');

/**
 * Content model.
 *
 * @package     CakePHP
 * @subpackage  app.Controller
 * @author      C1V0 <chris@spreadthehelp.com>
 */
class Content extends AppModel {

  public $name = 'Content';

  public $belongsTo = array('Site');
 
}
