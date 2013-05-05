<?php
/**
 *
 * Launchdown <launchdown.com>
 *
 * Copyright (C) 2013 Christopher J Vogt
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 *
 * @copyright     Copyright (c) 2013 Christopher J Vogt (http://chrisvogt.me)
 * @link          http://spreadthehelp.org Spread the Help Project
 * @category      CakePHP
 * @package       Launchdown
 * @subpackage    app.Controller
 * @since         Launchdown v 0.0.1
 * @license       GPL-2.0 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package   app.Controller
 * @link    http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public $components = array('DebugKit.Toolbar', 'Session');

}
