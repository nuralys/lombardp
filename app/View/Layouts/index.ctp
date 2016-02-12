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
	echo $this->Html->css(array('style','jquery.fancybox.css?v=2.1.5'));
	echo $this->Html->script(array('jquery-1.9.0.min', 'script','jquery.fancybox.pack.js?v=2.1.5'));
	 ?>	
</head>
<body>
	<div class="main">
		<?php echo $this->element('header'); //Вывод шапки сайта ?>
		
		<?php echo $this->fetch('content'); ?>

		<?php echo $this->element('footer'); ?>
	</div>
	<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">Купить/Заказать</span>
        <form method="POST" name="form1" action="form.php" >
			<input  name="name"  maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Имя..."/>
			<input   name="phone"  maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Номер..."/>
			<input   name="mail"  maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Почта..."/>
			<textarea name="comment"  class="modal_f "cols="30" rows="10" required placeholder="Ваш комментарий..."></textarea>
			<button type="submit"  name="submit1" >Отправить</button>
		</form>
	</div>
	<div id="overlay"></div>
</body>
</html>