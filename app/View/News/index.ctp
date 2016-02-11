<div class="grey pad">
	<div class="cr">									
		<ol class="breadcrumbs">
			<li><a href="/">Главная</a></li>
			<li><span>Новости</span></li>
		</ol>
		<h1>Новости</h1>
		<ul class="rows">
		<?php foreach ($news as $item): ?>
			<li>
				<figure class="news_card">
					<a href="#">
						<div class="img"><img src="/img/news/<?=$item['News']['img']?>"/></div>
					</a>							
					<figcaption class="news_info">
						<h2>
							<a href="/news/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
						</h2>
						<p class="des">										
                            <?= $this->Text->truncate(strip_tags($item['News']['body']), 100, array('ellipsis' => '...', 'exact' => true)) ?>                                    
						</p>
						<time class="article_date" datetime="<?=$item['News']['date']?>"><?=$item['News']['date']?></time>
					</figcaption>	
				</figure>
			</li>
		<?php endforeach ?>
		</ul>
	</div>	
</div>