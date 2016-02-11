<?php //debug($brands); ?>
<?php //debug($data); ?>

<div class="grey">
				<div class="cr">
					<?=$this->element('filter_clock') ?>
					<div class="catalog">
						<div class="wr">
							<ol class="breadcrumbs">
								<li><a href="/">Главная</a></li>
								<li><span>Каталог часов</span></li>
								<!-- <li><span>Купить сегодня:Москва</span></li> -->
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
											<a href="/clocks/<?=$item['Clock']['id']?>">
											<img src="/img//clock/thumbs/<?=$item['Clock']['img']?>" alt="<?=$item['Brand']['title'] ?>" />
											</a>
										</div>
										<figcaption>
											<a class="c_heading" href="/clocks/<?=$item['Clock']['id']?>"><?=$item['Brand']['title'] ?></a>
											<p class="c_des"><?=$item['Clock']['name'] ?></p>
											<i class="c_type"><?=$item['Housing']['title'] ?></i>
											<div class="c_price"><?=$item['Clock']['price'] ?>$</div>
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