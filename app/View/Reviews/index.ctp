<div class="grey">
				<div class="cr">					
					<div class="about_l">
						<ol class="breadcrumbs">
							<li><a href="index.html">Главная</a></li>
							<li><span>Отызвы</span></li>
						</ol>
						<div class="content">
							<h1>Отзывы</h1>
							<ul class="feed_ul">
								<?php foreach($data as $item): ?>
								<li class="feed_part">
									<div class="img">
										<img src="/img/review/<?=$item['Review']['img']?>">
									</div>
									<div class="text">
										<div class="heading"><?=$item['Review']['title']?>
									</div>
										<?=$item['Review']['body'] ?>
								</div>
								</li>
								<?php endforeach ?>							
							</ul>
						</div>
					</div>
					<?php echo $this->element('sidebar') ?>
				</div>	
			</div>