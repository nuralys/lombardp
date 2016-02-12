<?php 
// debug($data);
//debug($brand);
 ?>
<div class="order_part">
	<div class="cr">
		<div class="left_order">
			<a class="back" href="/clocks">Назад</a>
			<div class="order">
				<div class="wr">
					<div class="like"></div>
					<h2 class="order_title">
                        <span class="c_heading"><?=$brand['Brand']['title']?></span>
                        <small><?=$data['Clock']['name']?></small>
                    </h2>
                    <div class="for_line">
                    	<div class="price_line">Цена у нас</div>
						<div class="c_price"><?=$data['Clock']['price']?>$</div>	
                    </div>
                    <a href="#modal1" class="open_modal"><button type="submit">Купить</button></a>
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
			<img src="/img/clock/<?=$data['Clock']['img']?>"/>
		</figure>					
	</div>	
</div>
<div class="up_order">
	<div class="cr">
		<div class="or_row">
			<div class="wr">
			<ul class="ol_char">
				<?php if(!empty($brand['Brand']['title'])): ?>
					<li><span>Бренд:</span><?=$brand['Brand']['title']?></li>
				<?php endif ?>
				<?php if(!empty($data['Clock']['sex'])): ?>
					<li><span>Кому:</span> <?=$data['Clock']['sex']?></li>
				<?php endif ?>
				<?php if(!empty($data['Clock']['collection'])): ?>
					<li><span>Коллекция:</span><?=$data['Clock']['collection']?></li>
				<?php endif ?>
				<?php if(!empty($data['Clock']['reference'])): ?>
					<li><span>Референс:</span><?=$data['Clock']['reference']?></li>
				<?php endif ?>
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
		<div class="gal_tabs">
		<div class="tab1">
			<div class="spec_part">
				<div class="spec spec1">
					<div class="wr">
						<ul class="spec_ul">
						<?php if(!empty($type['Type']['title'])): ?>
							<li>
								<div class="spec_name">Тип:</div>
								<div class="spec_value">
									<span><?=$type['Type']['title']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($housing['Housing']['title'])): ?>
							<li>
								<div class="spec_name">Материал корпуса:</div>
								<div class="spec_value">
									<span><?=$housing['Housing']['title']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['watertightness'])): ?>
							<li>
								<div class="spec_name">Водонепроницаемость:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['watertightness']?> м</span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['housing_diameter'])): ?>
							<li>
								<div class="spec_name">Диаметр корпуса:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['housing_diameter']?> мм</span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['glass'])): ?>
							<li>
								<div class="spec_name">Стекло:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['glass']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['dial_color'])): ?>
							<li>
								<div class="spec_name">Цвет циферблата:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['dial_color']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['type_mechanism'])): ?>
							<li>
								<div class="spec_name">Тип механизма</div>
								<div class="spec_value">
									<span><?=$data['Clock']['type_mechanism']?></span>
								</div>
							</li>
						<?php endif ?>
						</ul>
					</div>
				</div>
				<div class="spec">
					<div class="wr">
						<ul class="spec_ul">
						<?php if(!empty($data['Clock']['options'])): ?>
							<li>
								<div class="spec_name">Функции:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['options']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['power_reserve'])): ?>
							<li>
								<div class="spec_name">Запас хода:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['power_reserve']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['caliber'])): ?>
							<li>
								<div class="spec_name">Калибр:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['caliber']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['band_material'])): ?>
							<li>
								<div class="spec_name">Материал ремешка:</div>
								<div class="spec_value">
									<span><?=$data['Clock']['band_material']?></span>
								</div>
							</li>
						<?php endif ?>
						<?php if($data['Clock']['equipment'] != 1): ?>
							<li>
								<div class="spec_name">Комплектация:</div>
								<div class="spec_value">
									<span>
									<?php 
									if($data['Clock']['equipment']){
										switch ($data['Clock']['equipment']) {
											case '1':
												echo '';
												break;
											case '2':
												echo 'Полный комплект';
												break;
											
											default:
												# code...
												break;
										}
									}
									 ?>
									</span>
								</div>
							</li>
						<?php endif ?>
						<?php if(!empty($data['Clock']['condition_clock'])): ?>
							<li>
								<div class="spec_name">Состояние</div>
								<div class="spec_value">
									<span>
									<?php 
									if($data['Clock']['condition_clock']){
										switch ($data['Clock']['condition_clock']) {
											case '1':
												echo 'Абсолютно новые';
												break;
											case '2':
												echo 'Часы «с пробегом»';
												break;
											
											default:
												# code...
												break;
										}
									}
									 ?>
									</span>
								</div>
							</li>
						<?php endif ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="tab2">
			<p><b>На все часы, приобретаемые в нашем магазине, мы предоставляем гарантии:</b></p>
						<ul>
							<li>подлинности часов;</li>
							<li>юридической чистоты;</li>
							<li>качественной предпродажной подготовки;</li>
							<li>адекватного подхода и оптимальных цен;</li>
							<li>строгой комплексной проверки все часов без исключения;</li>
							<li>гарантию работоспособности и точности хода от 6 месяцев до 2 лет.</li>							
						</ul>
						<p><b>Почему выгодно покупать часы в наших ломбардах?</b></p>
						<ul>
							<li>Заложенные, но невыкупленные элитные часы, мы продаем по ценам ниже их рыночной стоимости для быстрого оборота средств. Прежде чем попасть на витрину, часы проходят серьезную и полную проверку на юридическую чистоту и работоспособность. Но в любом случае, перед покупкой обсуждаются условия проверки в сторонних сервисных центрах.</li>
							<li>Мы не продаем и не покупаем часы с серьезными техническими дефектами.</li>
							<li>По приезду поторгуйтесь, получите скидку. Обсуждается гарантия низкой цены.</li>
							<li>Для владельцев часов, желающих поменять свои часы на другую модель или на новые, и при этом избежать обременительной и зачастую небезопасной процедуры самостоятельной продажи своих часов на форумах, по объявлению в газете и т.д. - trade-in является самым удобным и выгодным способом. Вы просто привозите свои часы и меняете на наши или с Вашей доплатой, или с нашей доплатой, а зачастую один к одному.</li>
						</ul>	
		</div>
		</div>
	</div>
</div>