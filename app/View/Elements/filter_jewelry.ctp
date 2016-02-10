<aside class="filtr">
	<div class="wr">
		<form action="/jewelries" method="get">
			<div class="filt_title">
				Фильтр
				<div class="decor-title_wings"></div>
			</div>

			<input class="reference" name="reference" type="text" placeholder="Поиск по реферансу"/>
			
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
			
			<div class="submit_part">
				<button type="submit" class="btn">Применить</button>
				<a href="/jewelries">Сбросить все</a>
			</div>	
		</form>
	</div>
</aside>