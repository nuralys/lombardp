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
						<input type="radio" id="grand">
						<label>
							<span>Нет (Акция)</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Да (Акция)</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Limited editions</div>									
					<div class="hidden_in">
						<input type="radio" id="grand">
						<label>
							<span>Нет (Limited edition)/span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Да (Limited edition)</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Тип</div>									
					<div class="hidden_in">
						<input type="radio" id="grand">
						<label>
							<span>Классические</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Настольные</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>С усложнениями</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Спортивные</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Ювелирное</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Ювелирные</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Каминные</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Форма корпуса</div>									
					<div class="hidden_in">
						<input type="radio" id="grand">
						<label>
							<span>Бочка</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Квадратная</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Круглая</span>
						</label>
						<input type="radio" id="grand">
						<label>
							<span>Овальная</span>
						</label>
					</div>
				</div>
				<div class="filter_set">
					<div class="filter_title">Материал корпуса</div>									
					<div class="hidden_in">
						<input  type="checkbox" id="cond119">
						<label for="cond119">18- к белое золото</label>
						<input  type="checkbox" id="cond120" >
						<label for="cond120">18-к Желтое золото</label>
						<input  type="checkbox" id="cond121">
						<label for="cond121">18-к Розовое золото,титан,покрытие PVD</label>
						<input  type="checkbox" id="cond122">
						<label for="cond122">18-к желтое золото и сталь </label>
						<input  type="checkbox" id="cond123">
						<label for="cond123">18-к розовое золото</label>
						<input  type="checkbox" id="cond124">
						<label for="cond124">18-к розовое золото и керамика</label>
						<input  type="checkbox" id="cond125">
						<label for="cond125">18-к розовое золото, сталь</label>
						<input  type="checkbox" id="cond126">
						<label for="cond126">PVD</label>
						<input  type="checkbox" id="cond127">
						<label for="cond127">Белое 18-к золото,сталь.</label>
						<input  type="checkbox" id="cond128">
						<label for="cond128">Белое золото</label>
						<input  type="checkbox" id="cond129">
						<label for="cond129">Бронза</label>
						<input  type="checkbox" id="cond130">
						<label for="cond130">Золото</label>
						<input  type="checkbox" id="cond131">
						<label for="cond131">Золото,карбон.</label>
						<input  type="checkbox" id="cond132">
						<label for="cond132">Карбон и Керамика</label>
						<input  type="checkbox" id="cond133">
						<label for="cond133">Каучук</label>
						<input  type="checkbox" id="cond134">
						<label for="cond134">Керамика</label>
						<input  type="checkbox" id="cond135">
						<label for="cond135">Керамика,титан и розовое золото</label>
						<input  type="checkbox" id="cond136">
						<label for="cond136">Кованый карбон,керамика,титан</label>
						<input  type="checkbox" id="cond137">
						<label for="cond137">Латунь</label>
						<input  type="checkbox" id="cond138">
						<label for="cond138">Нержавеющая сталь</label>
						<input  type="checkbox" id="cond139">
						<label for="cond139">Нержавеющая сталь, керамика</label>
						<input  type="checkbox" id="cond140">
						<label for="cond140">Нержавеющая сталь, покрытие PVD</label>
						<input  type="checkbox" id="cond141">
						<label for="cond141">Нержавеющая сталь,покрытие DLC.</label>
						<input  type="checkbox" id="cond142">
						<label for="cond142">Палладий</label>
						<input  type="checkbox" id="cond143">
						<label for="cond143">Платина</label>
						<input  type="checkbox" id="cond144">
						<label for="cond144">Позолота</label>
						<input  type="checkbox" id="cond145">
						<label for="cond145">Розовое золото</label>
						<input  type="checkbox" id="cond146">
						<label for="cond146">Розовое золото 18к, нержавеющая сталь, покрытие PVD</label>
						<input  type="checkbox" id="cond147">
						<label for="cond147">Серебро</label>
						<input  type="checkbox" id="cond148">
						<label for="cond148">Сталь</label>
						<input  type="checkbox" id="cond149">
						<label for="cond149">Сталь и керамика.</label>
						<input  type="checkbox" id="cond150">
						<label for="cond150">Титан и карбон</label>
						<input  type="checkbox" id="cond151">
						<label for="cond151">Титан с DLC покрытием</label>
						<input  type="checkbox" id="cond152">
						<label for="cond152">Цирконий,керамика.</label>
						<input  type="checkbox" id="cond153">
						<label for="cond153">алюминий</label>
						<input  type="checkbox" id="cond154">
						<label for="cond154">белое золото 18к, нержавеющая сталь</label>
						<input  type="checkbox" id="cond155">
						<label for="cond155">бронза и титан</label>
						<input  type="checkbox" id="cond156">
						<label for="cond156">залиум</label>
						<input  type="checkbox" id="cond157">
						<label for="cond157">золото и каучук</label>
						<input  type="checkbox" id="cond158">
						<label for="cond158">золото и керамика</label>
						<input  type="checkbox" id="cond159">
						<label for="cond159">золото, инкрустирован бриллиантами</label>
						<input  type="checkbox" id="cond160">
						<label for="cond160">карбон</label>
						<input  type="checkbox" id="cond161">
						<label for="cond161">керамика, белое золото 18к, покрытие PVD </label>
						<input  type="checkbox" id="cond162">
						<label for="cond162">нержавеющая сталь, каучук, титан, покрытие PVD</label>
						<input  type="checkbox" id="cond163">
						<label for="cond163">нержавеющая сталь, покрытие DLC, розовое золото 18к</label>
						<input  type="checkbox" id="cond164">
						<label for="cond164">нержавеющая сталь, покрытие PVD, керамика, карбон</label>
						<input  type="checkbox" id="cond165">
						<label for="cond165">платина 950</label>
						<input  type="checkbox" id="cond166">
						<label for="cond166">платина,покрытая PVD</label>
						<input  type="checkbox" id="cond167">
						<label for="cond167">покрытый тонким слоем родия</label>
						<input  type="checkbox" id="cond168">
						<label for="cond168">розовое золото,титан</label>
						<input  type="checkbox" id="cond169">
						<label for="cond169">сталь и желтое золото</label>
						<input  type="checkbox" id="cond170">
						<label for="cond170">сталь и золото</label>
						<input  type="checkbox" id="cond171">
						<label for="cond171">сталь и каучук</label>
						<input  type="checkbox" id="cond172">
						<label for="cond172">сталь и платина</label>
						<input  type="checkbox" id="cond173">
						<label for="cond173">сталь и титан</label>
						<input  type="checkbox" id="cond174">
						<label for="cond174">стальной , украшен белыми бриллиантами</label>
						<input  type="checkbox" id="cond175">
						<label for="cond175">титан</label>
						<input  type="checkbox" id="cond176">
						<label for="cond176">титан и  PVD</label>
						<input  type="checkbox" id="cond177">
						<label for="cond177">титан и золото</label>
						<input  type="checkbox" id="cond178">
						<label for="cond178">титан и каучук</label>
						<input  type="checkbox" id="cond179">
						<label for="cond179">титан и керамика</label>
						<input  type="checkbox" id="cond180">
						<label for="cond180">титан,карбон,PVD</label>
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