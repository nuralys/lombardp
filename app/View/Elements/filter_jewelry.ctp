<aside class="filtr">
	<div class="wr">
		<form action="/jewelries" method="get">
			<div class="filt_title">
				Фильтр
				<div class="decor-title_wings"></div>
			</div>

			<input class="reference" name="reference" type="text" placeholder="Поиск по реферансу"/>
			<div class="filter_set">
				<div class="filter_title">Тип</div>									
				<input type="radio" value="1" name="type" id="type1" <?php echo (isset($_GET['type']) && $_GET['type']==1) ? "checked='checked'" : "" ?>>
				<label for="type1">
					<span>Браслет</span>
				</label>
				<input type="radio" value="2" name="type" id="type2" <?php echo (isset($_GET['type']) && $_GET['type']==2) ? "checked='checked'" : "" ?>>
				<label for="type2">
					<span>Запонки</span>
				</label>
				<input type="radio" value="3" name="type" id="type3" <?php echo (isset($_GET['type']) && $_GET['type']==3) ? "checked='checked'" : "" ?>>
				<label for="type3">
					<span>Колье</span>
				</label>
				<input type="radio" value="4" name="type" id="type4" <?php echo (isset($_GET['type']) && $_GET['type']==4) ? "checked='checked'" : "" ?>>
				<label for="type4">
					<span>Кольцо</span>
				</label>
				<input type="radio" value="5" name="type" id="type5" <?php echo (isset($_GET['type']) && $_GET['type']==5) ? "checked='checked'" : "" ?>>
				<label for="type5">
					<span>Комплект</span>
				</label>
				<input type="radio" value="6" name="type" id="type6" <?php echo (isset($_GET['type']) && $_GET['type']==6) ? "checked='checked'" : "" ?>>
				<label for="type6">
					<span>Крест</span>
				</label>
				<input type="radio" value="7" name="type" id="type7" <?php echo (isset($_GET['type']) && $_GET['type']==7) ? "checked='checked'" : "" ?>>
				<label for="type7">
					<span>Подвеска</span>
				</label>
				<input type="radio" value="8" name="type" id="type8" <?php echo (isset($_GET['type']) && $_GET['type']==8) ? "checked='checked'" : "" ?>>
				<label for="type8">
					<span>Серьги</span>
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
			<div class="submit_part">
				<button type="submit" class="btn">Применить</button>
				<a href="/jewelries">Сбросить все</a>
			</div>	
		</form>
	</div>
</aside>