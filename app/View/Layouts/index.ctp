<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | Lombard-perspectiva.kz</title>
	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css('style');
	echo $this->Html->script(array('jquery-1.9.0.min', 'script'));
	 ?>	
</head>
<body>
	<div class="main">
		<?php echo $this->element('header'); //Вывод шапки сайта ?>
		
		<?php echo $this->fetch('content'); ?>

		<?php echo $this->element('footer'); ?>
	</div>
</body>
</html>