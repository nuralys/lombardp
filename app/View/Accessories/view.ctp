<?php 
//debug($data);
//debug($brand);
 ?>
<div class="order_part">
	<div class="cr">
		<div class="left_order">
			<a class="back" href="#">Назад</a>
			<div class="order">
				<div class="wr">
					<div class="like"></div>
					<h2 class="order_title">
                        <span class="c_heading"><?=$brand['Brand']['title']?></span>
                        <small><?=$data['Accessory']['name']?></small>
                    </h2>
                    <div class="for_line">
                    	<div class="price_line">Цена у нас</div>
						<div class="c_price"><?=$data['Accessory']['price']?>$</div>	
                    </div>
                    <button type="submit">Купить</button>
                    <span class="delivery">Товар будет доставлен вам за  24 часа</span>
                </div>
			</div>
			<div class="order_type">Часы с пробегом</div>
			<div class="share_part">
				<span>Поделиться:</span>
				<ul class="share_ul">
					<li>
						<a class="s_vk" href="#"></a>
					</li>
					<li>
						<a class="s_od" href="#"></a>
					</li>
					<li>
						<a class="s_tw" href="#"></a>
					</li>
					<li>
						<a class="s_f" href="#"></a>
					</li>
					<li>
						<a class="s_g" href="#"></a>
					</li>							
				</ul>
			</div>
		</div>
		<figure class="product_img">
			<img src="/img/accessory/<?=$data['Accessory']['img']?>"/>
		</figure>					
	</div>	
</div>
<div class="up_order">
	<div class="cr">
		<div class="or_row">
			<div class="wr">
			<ul class="ol_char">
				<li><span>Бренд:</span><?=$brand['Brand']['title']?></li>
				<li><span>Референс:</span><?=$data['Accessory']['reference']?></li>
			</ul>
			</div>
		</div>
		<div class="or_row">
			<div class="wr">
				<span>Доступны:</span>
				<p>В вашем городе (Москва)</p>
				<p>Доставка в Санкт-Петербург и другие города России бесплатно в течение 24 часов</p>
			</div>
		</div>
		<div class="or_row">
			<div class="wr">
				<span>Остались вопросы? Свяжитесь с нами:</span>
				<div class="a_num">
					<a href="#">8 (800) 555-95-99,</a><a href="#"> +7 (495) 215-21-15</a>
				</div>
				<a class="a_back" href="">Перезвоните мне</a>
			</div>
		</div>
	</div>
</div>
<div class="character">
	<div class="cr">
		<ul class="tabs">
			<li class="active">Описание и характеристики</li>
			<li>Оплата, гарантия и доставка</li>
		</ul>
		<div class="tab1">
			<div class="spec_part">
				<div class="spec spec1">
					<div class="wr">
						<ul class="spec_ul">
							<?php if(!empty($data['Accessory']['equipment'])): ?>
							<li>
								<div class="spec_name">Комплектация:</div>
								<div class="spec_value">
									<span>
									<?=$data['Accessory']['equipment'];?>
									</span>
								</div>
							</li>
							<?php endif ?>
							<?php if(!empty($data['Accessory']['condition'])): ?>
							<li>
								<div class="spec_name">Состояние:</div>
								<div class="spec_value">
									<span>
									<?=$data['Accessory']['condition'];?>
									</span>
								</div>
							</li>
							<?php endif ?>
							
						</ul>
					</div>
				</div>
				<div class="spec">
					<div class="wr">
						<ul class="spec_ul">
							<?php if(!empty($data['Accessory']['other'])): ?>
							<li>
								<!-- <div class="spec_name">Комплектация:</div> -->
								<div class="spec_value">
									<span>
									<?=$data['Accessory']['other'];?>
									</span>
								</div>
							</li>
							<?php endif ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="tab2"></div>
	</div>
</div>