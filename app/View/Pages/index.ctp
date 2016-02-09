<div class="grey">
	<div class="cr">					
		<div class="about_l">
			<ol class="breadcrumbs">
				<li><a href="/">Главная</a></li>
				<li><span><?=$page['Page']['title']?></span></li>
			</ol>
			<div class="content">
				<h1><?=$page['Page']['title']?></h1>
				<?=$page['Page']['body']?>
				
			</div>
		</div>
		<?=$this->element('sidebar')?>
	</div>	
</div>