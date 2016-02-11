<div class="grey">
	<div class="cr">					
		<div class="about_l">
			<ol class="breadcrumbs">
				<li><a href="/">Главная</a></li>
				<li><span><a href="/services">Услуги</a></span></li>
				<li><span><?=$data['Article']['title']?></span></li>
			</ol>
			<div class="content">
				<h1><?=$data['Article']['title']?></h1>
				<time class="article__date" datetime="<?=$data['Article']['date']?>"><?=$data['Article']['date']?></time>
				<?=$data['Article']['body']?>
			</div>
		</div>
	</div>
</div>