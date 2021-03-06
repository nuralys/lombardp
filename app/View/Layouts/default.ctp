<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __('Админ панель');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?> |
		<?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style', 'reset', 'style2'));

		echo $this->Html->script(array('ckeditor/ckeditor', 'jquery.min', 'jquery.imgareaselect'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<header>
	
	<section class="head">
		<div class="cr">
			<div class="logo">
				<a href="">
					<img src="" alt=""/>
				</a>

			</div>
			<nav class="top_menu">
				
				<div class="top_menu_item">
					<a href="/admin/clocks">Часы</a>
				</div>
				<div class="top_menu_item">
					<a href="/admin/accessories">Аксессуары</a>
				</div>
				<div class="top_menu_item">
					<a href="/admin/jewelries">Ювелирные изделия</a>
				</div>
				<div class="top_menu_item">
					<a href="/admin/services">Услуги</a>
				</div>
				<div class="top_menu_item">
					<a href="/admin/pages">Страницы</a>
				</div>
				<div class="top_menu_item ">
					<a href="/admin/reviews">Отзывы</a>
				</div>
				
				<div class="top_menu_item">
					<a href="/admin/news">Новости</a>
				</div>
				
			</nav>
		</div>
	</section>
</header>
	
		
		<div class=" cr">
		<div class="container">

			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		</div>
		
	
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
