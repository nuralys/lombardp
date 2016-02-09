<aside class="filtr">
	<div class="wr">
		<form action="/clocks" method="get">
			<div class="filt_title">
				Фильтр
				<div class="decor-title_wings"></div>
			</div>
			<input class="reference" name="reference" type="text" placeholder="Поиск по реферансу"/>
			<div class="filter_set">
				<div class="filter_title">GRAND-КОМПЛЕКТАЦИЯ</div>									
				<input type="radio" id="grand1" name="grand"  value="1" <?php echo (isset($_GET['grand']) && $_GET['grand']==1) ? "checked='checked'" : "" ?> />
				<label for ="grand1">
					<span>Нет (Grand-комплектация)</span>
				</label>
				<input type="radio" id="grand2" name="grand"  value="2" <?php echo (isset($_GET['grand']) && $_GET['grand']==2) ? "checked='checked'" : "" ?> />
				<label for="grand2">
					<span>Да (Grand-комплектация)</span>
				</label>
			</div>
			<div class="filter_set">
				<div class="filter_title">Состояние</div>									
				<input type="radio" name="condition" value="1" id="new" 
				<?php echo (isset($_GET['condition']) && $_GET['condition']==1) ? "checked='checked'" : "" ?>>
				<label for="new">
					<span>Абсолютно новые</span>
				</label>
				<input type="radio" name="condition" value="2" id="old" 
				<?php echo (isset($_GET['condition']) && $_GET['condition']==2) ? "checked='checked'" : "" ?>>
				<label for="old">
					<span>Часы «с пробегом»</span>
				</label>
			</div>
			<div class="filter_set">
				<div class="filter_title">Кому</div>									
				<input name="sex" value="1" type="radio" id="male" <?php echo (isset($_GET['sex']) && $_GET['sex']==1) ? "checked='checked'" : "" ?>>
				<label for="male">
					<span>Мужские</span>
				</label>
				<input type="radio" value="2" name="sex" id="female" <?php echo (isset($_GET['sex']) && $_GET['sex']==2) ? "checked='checked'" : "" ?>>
				<label for="female">
					<span>Женские</span>
				</label>
				<input name="sex" value="3" type="radio" id="unisex" <?php echo (isset($_GET['sex']) && $_GET['sex']==3) ? "checked='checked'" : "" ?>>
				<label for="unisex">
					<span>Юнисекс</span>
				</label>
			</div>
			<div class="filter_set">
				<div class="filter_title">Поступления</div>									
				<input type="radio" value="1" name="receipts" id="receipts1" <?php echo (isset($_GET['receipts']) && $_GET['receipts']==1) ? "checked='checked'" : "" ?>>
				<label for="receipts1">
					<span>На заказ</span>
				</label>
				<input type="radio" value="2" name="receipts" id="receipts2" <?php echo (isset($_GET['receipts']) && $_GET['receipts']==2) ? "checked='checked'" : "" ?>>
				<label for="receipts2">
					<span>Новые поступления</span>
				</label>
				<input type="radio" value="3" name="receipts" id="receipts3" <?php echo (isset($_GET['receipts']) && $_GET['receipts']==3) ? "checked='checked'" : "" ?>>
				<label for="receipts3">
					<span>Ожидаемые поступления</span>
				</label>
			</div>
			<div class="filter_set">
				<div class="filter_title">Цена со скидкой</div>									
				<input type="checkbox" id="sale" name="sale"  value="1" <?php echo (isset($_GET['sale']) && $_GET['sale']==1) ? "checked='checked'" : "" ?> />
				<label for ="sale">
					<span>Да (Скидка)</span>
				</label>
				
			</div>
			<div class="filter_set">
				<div class="filter_title">Бренд</div>	
				<?php foreach($brands as $key => $value): ?>
				<input type="radio" name="brand_id" value="<?=$key?>" id="brand_id_<?=$key?>" <?php echo (isset($_GET['brand_id']) && $_GET['brand_id']==$key) ? "checked='checked'" : "" ?>>
				<label for="brand_id_<?=$key?>">
					<span><?=$value?></span>
				</label>
				<?php endforeach ?>

				
			</div>
			<div class="filter_set">
				<div class="filter_title">Стоимость</div>									
				<input type="radio" name="price" value="5000" id="price5000">
				<label for="price5000">
					<span>до 5,000 $</span>
				</label>
				<input type="radio" name="price" value="10000" id="price10000">
				<label for="price10000">
					<span>до 10,000 $</span>
				</label>
				<input type="radio" name="price" value="50000" id="price50000">
				<label for="price50000">
					<span>до 50,000 $</span>
				</label>
			</div>
			<div class="hidden_filters">
				<div class="filter_set">
					<div class="filter_title">Акция</div>									
					<div class="hidden_in">
						<input <?php echo (isset($_GET['promo']) && $_GET['promo']==1) ? "checked='checked'" : "" ?> type="radio" value="1" name="promo" id="promo1">
						<label for="promo1">
							<span>Нет (Акция)</span>
						</label>
						<input <?php echo (isset($_GET['promo']) && $_GET['promo']==2) ? "checked='checked'" : "" ?> type="radio" value="2" name="promo" id="promo2">
						<label for="promo2">
							<span>Да (Акция)</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Limited editions</div>									
					<div class="hidden_in">
						<input <?php echo (isset($_GET['equipment']) && $_GET['equipment']==1) ? "checked='checked'" : "" ?> name="equipment" type="radio" value="1" id="equipment1">
						<label for="equipment1">
							<span>Нет (Limited edition)</span>
						</label>
						<input <?php echo (isset($_GET['equipment']) && $_GET['equipment']==2) ? "checked='checked'" : "" ?> name="equipment" type="radio" value="2" id="equipment2">
						<label for="equipment2">
							<span>Да (Limited edition)</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Тип</div>	
					<div class="hidden_in">
					<?php foreach($types as $key => $value): ?>
					<input type="radio" name="type_id" value="<?=$key?>" id="type_id_<?=$key?>" <?php echo (isset($_GET['type_id']) && $_GET['type_id']==$key) ? "checked='checked'" : "" ?>>
					<label for="type_id_<?=$key?>">
						<span><?=$value?></span>
					</label>
					<?php endforeach ?>
					</div>
				</div>
				
				<div class="filter_set">
					<div class="filter_title">Форма корпуса</div>									
					<div class="hidden_in">
						<input <?php echo (isset($_GET['hullshape']) && $_GET['hullshape']==1) ? "checked='checked'" : "" ?> name="hullshape" value="1" type="radio" id="hullshape1">
						<label for="hullshape1">
							<span>Бочка</span>
						</label>
						<input <?php echo (isset($_GET['hullshape']) && $_GET['hullshape']==2) ? "checked='checked'" : "" ?> name="hullshape" value="2" type="radio" id="hullshape2">
						<label for="hullshape2">
							<span>Квадратная</span>
						</label>
						<input <?php echo (isset($_GET['hullshape']) && $_GET['hullshape']==3) ? "checked='checked'" : "" ?> name="hullshape" value="3" type="radio" id="hullshape3">
						<label for="hullshape3">
							<span>Круглая</span>
						</label>
						<input <?php echo (isset($_GET['hullshape']) && $_GET['hullshape']==4) ? "checked='checked'" : "" ?> name="hullshape" value="4" type="radio" id="hullshape4">
						<label for="hullshape4">
							<span>Овальная</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Материал корпуса</div>	
					<div class="hidden_in">
					<?php foreach($housings as $key => $value): ?>
					<input type="radio" name="housing_id" value="<?=$key?>" id="housing_id_<?=$key?>" <?php echo (isset($_GET['housing_id']) && $_GET['housing_id']==$key) ? "checked='checked'" : "" ?>>
					<label for="housing_id_<?=$key?>">
						<span><?=$value?></span>
					</label>
					<?php endforeach ?>
					</div>
				</div>
				
			</div>
			<div class="submit_part">
				<button type="submit" class="btn">Применить</button>
				<a href="catalog.html">Сбросить все</a>
			</div>	
		</form>
	</div>
</aside>