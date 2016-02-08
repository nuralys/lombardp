<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление нового материала</h2>
	</div>
<?php 
echo $this->Form->create('Accessory', array('type' => 'file'));?>
<div class="input select">
	<label for="AccessoryBrandId">Бренд:</label>
	<select name="data[Accessory][brand_id]" id="AccessoryBrandId" required="required">
	<option>Выберите бренд</option>
		<?php foreach($brands as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<?php
echo $this->Form->input('name', array('label' => 'Название:'));
echo $this->Form->input('price', array('label' => 'Цена:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('collection', array('label' => 'Коллекция:'));
?>
<div class="input select">
	<label for="AccessorySex">Кому:</label>
	<select name="data[Accessory][sex]" id="AccessorySex" required="required">
	<option value="">Выберите кому</option>
			<option value="1">Мужские</option>
			<option value="2">Женские</option>
			<option value="3">Юнисекс</option>
	</select>
</div>
<div class="input select">
	<label for="AccessoryReceipts">Поступления:</label>
	<select name="data[Accessory][receipts]" id="AccessorySex">
		<option value="0">---</option>
		<option value="1">На заказ</option>
		<option value="2">Новые поступления</option>
		<option value="3">Ожидаемые поступления</option>
	</select>
</div>
<?php
echo $this->Form->input('sale', array('label' => 'Скидка %:'));
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('type', array('label' => 'Тип:'));
?>
<div class="input select">
	<label for="AccessoryHullshape">Форма корпуса:</label>
	<select name="data[Accessory][hullshape]" id="AccessorySex">
		<option value="0">---</option>
		<option value="1">Бочка</option>
		<option value="2">Квадратная</option>
		<option value="3">Круглая</option>
		<option value="4">Овальная</option>
	</select>
</div>
<div class="input select">
	<label for="AccessoryHousingId">Материал корпуса:</label>
	<select name="data[Accessory][housing_id]" id="AccessoryHousingId" required="required">
	<option>Выберите материал</option>
		<?php foreach($housings as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<?php
echo $this->Form->input('watertightness', array('label' => 'Водонепроницаемость:'));
echo $this->Form->input('housing_diameter', array('label' => 'Диаметр корпуса:'));
echo $this->Form->input('glass', array('label' => 'Стекло:'));
echo $this->Form->input('dial_color', array('label' => 'Цвет циферблата:'));
echo $this->Form->input('type_mechanism', array('label' => 'Тип механизма:'));
echo $this->Form->input('options', array('label' => 'Функции:'));
echo $this->Form->input('power_reserve', array('label' => 'Запас хода:'));
echo $this->Form->input('caliber', array('label' => 'Калибр:'));
echo $this->Form->input('band_material', array('label' => 'Материал ремешка:'));
?>
<div class="input select">
	<label for="AccessoryEquipment">Комплектация:</label>
	<select name="data[Accessory][equipment]" id="AccessoryEquipment" required="required">
			<option value="">Выберите комплектацию</option>
			<option value="1">Нет (Grand-комплектация)</option>
			<option value="2">Да (Grand-комплектация)</option>
	</select>
</div>
<div class="input select">
	<label for="AccessoryCondition_clock">Состояние:</label>
	<select name="data[Accessory][condition_clock]" id="Accessorycondition_clock" required="required">
			<option value="">Выберите состояние</option>
			<option value="0">Часы «с пробегом»</option>
			<option value="1">Абсолютно новые</option>
	</select>
</div>
<?php
echo $this->Form->end('Создать');
?>
</div>