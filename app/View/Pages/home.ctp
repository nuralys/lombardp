<div class="photos">
				<div class="big">
					<div class="wr">
						<div class="left_watch">
							<div class="lt_watch">
								Лучшее предложения дня
								<span></span>
							</div>
							<h3 class="decor_title">
								Audemars Piguet
								<small>Royal Oak GMT Tourbillon Concept</small>
							</h3>
							<div class="bestseller_price">157,500 $</div>
							<a class="best_more" href="#">Узнать больше</a>
						</div>
						<div class="big_img">
							<img src="/img/watch.jpg"/>
						</div>
					</div>
				</div>
				<div class="coming">
					<div class="small_i sm_new">
					 	<a href="/clocks?receipts=2">
					 		<div class="supply_link">
					 			Новые <br> поступления
					 		</div>
					 	</a>
					</div>
					<div class="small_i sm_wait">
						<a href="/clocks?receipts=3">
							<div class="supply_link">
								Ожидаемые <br> поступления
							</div>
						</a>
					</div>
				</div>
			</div>
			<section class="special">
				<div class="cr">
					<h2>
						<span>Спецпредложения</span>
					</h2>
					<ul class="rows">
					<?php foreach($deals as $item): ?>
						<li>
							<figure class="card">
								<div class="card_img">
									<a href="/clocks/<?=$item['Clock']['id']?>">
									<img src="/img/clock/thumbs/<?=$item['Clock']['img']?>"/>
									</a>
								</div>
								<figcaption>
									<a class="c_heading" href="/clocks/<?=$item['Clock']['id']?>"><?=$item['Brand']['title']?></a>
									<p class="c_des"><?=$item['Clock']['name']?></p>
									<i class="c_type"><?=$item['Housing']['title']?></i>
									<div class="c_price"><?=$item['Clock']['price']?>$</div>
								</figcaption>
							</figure>
						</li>
						<?php endforeach ?>						
					</ul>
				</div>
			</section>