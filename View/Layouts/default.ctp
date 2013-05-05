<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Launchdown: open source landing page management system');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		#echo $this->Html->css('cake.generic');
#		echo '<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">';
		echo '<link href="//netdna.bootstrapcdn.com/bootswatch/2.3.1/cerulean/bootstrap.min.css" rel="stylesheet">';
		echo $this->Html->css('launchdown.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<?php echo $this->element('navbar'); ?>

	<div id="container" class="container" style="margin-top:62px;">

	<!-- Masthead
	================================================== -->
	<header class="jumbotron subhead" id="overview">
	  <div class="row">
	    <div class="span6">
	      <h1>Launchdown</h1>
	      <p class="lead">Open source landing page management system</p>
	    </div>
	  </div>
	  <div class="subnav">
	    <!-- <p class="alert alert-success">Could this be a really cool alert box?</p> -->
	  </div>
	</header>

	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<div class="row">
			<?php echo $this->fetch('content'); ?>
		</div><!-- /.row -->
	</div><!-- /.content -->

	<div id="footer" class="well pagination-centered" style="margin-top:24px;">
		<?php echo $this->Html->link(
				$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false)
			); ?> 
	</div><!-- /#footer -->

	</div><!-- /.container -->

	<?php # echo $this->element('sql_dump'); ?>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</body>
</html>
