<?php //debug($brands); ?>
<?php //debug($data); ?>

<div class="grey">
				<div class="cr">
					<?php echo $this->element('filter_jewelry') ?>
					<div class="catalog">
						<div class="wr">
							<ol class="breadcrumbs">
								<li><a href="/">Главная</a></li>
								<li><span>Каталог аксессуаров</span></li>
								<!-- <li><span>Купить сегодня:Казахстан</span></li> -->
							</ol>
							<div class="sec_cat">
								<h1>Каталог</h1>
								<!-- <select class="btn">
									<option>Астана</option>
									<option>Алматы</option>
								</select> -->
							</div>
							<?php if(empty($data)): ?>
								<div class="not_found">Ничего не найдено</div>
							<?php else: ?>
							<ul class="rows cat_rows">
								<?php foreach($data as $item): ?>
								<li>
									<figure class="card">
										<div class="card_img">
											<a href="/jewelries/<?=$item['Jewelry']['id']?>">
											<img src="/img/jewelry/thumbs/<?=$item['Jewelry']['img']?>" alt="<?=$item['Brand']['title'] ?>" />
											</a>
										</div>
										<figcaption>
											<a class="c_heading" href="/jewelries/<?=$item['Jewelry']['id']?>"><?=$item['Brand']['title'] ?></a>
											<p class="c_des"><?=$item['Jewelry']['name'] ?></p>
											<div class="c_price"><?=$item['Jewelry']['price'] ?>$</div>
										</figcaption>
									</figure>
								</li>
								<?php endforeach; ?>					
							</ul>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>