<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление нового материала</h2>
	</div>
<?php 
echo $this->Form->create('Clock', array('type' => 'file'));?>
<div class="input select add_clock">
	<label for="ClockBrandId">Бренд:</label>
	<select name="data[Clock][brand_id]" id="ClockBrandId" required="required">
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
<div class="input select add_clock">
	<label for="ClockSex">Кому:</label>
	<select name="data[Clock][sex]" id="ClockSex" required="required">
	<option value="">Выберите кому</option>
			<option value="1">Мужские</option>
			<option value="2">Женские</option>
			<option value="3">Юнисекс</option>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockReceipts">Поступления:</label>
	<select name="data[Clock][receipts]" id="ClockSex">
		<option value="0">---</option>
		<option value="1">На заказ</option>
		<option value="2">Новые поступления</option>
		<option value="3">Ожидаемые поступления</option>
	</select>
</div>
<?php
echo $this->Form->input('sale', array('label' => 'Скидка %:'));
echo $this->Form->input('reference', array('label' => 'Референс:'));
?>
<div class="input select">
	<label for="ClockTypeId">Тип:</label>
	<select name="data[Clock][type_id]" id="ClockTypeId" required="required">
	<option>Выберите тип</option>
		<?php foreach($types as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockHullshape">Форма корпуса:</label>
	<select name="data[Clock][hullshape]" id="ClockSex">
		<option value="0">---</option>
		<option value="1">Бочка</option>
		<option value="2">Квадратная</option>
		<option value="3">Круглая</option>
		<option value="4">Овальная</option>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockHousingId">Материал корпуса:</label>
	<select name="data[Clock][housing_id]" id="ClockHousingId" required="required">
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
?>

<?php
echo $this->Form->input('options', array('label' => 'Функции:'));
echo $this->Form->input('power_reserve', array('label' => 'Запас хода:'));
echo $this->Form->input('caliber', array('label' => 'Калибр:'));
echo $this->Form->input('band_material', array('label' => 'Материал ремешка:'));
?>
<div class="input select add_clock">
	<label for="ClockEquipment">Комплектация:</label>
	<select name="data[Clock][equipment]" id="ClockEquipment" required="required">
			<option value="">Выберите комплектацию</option>
			<option value="1">Нет (Grand-комплектация)</option>
			<option value="2">Да (Grand-комплектация)</option>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockCondition_clock">Состояние:</label>
	<select name="data[Clock][condition_clock]" id="Clockcondition_clock" required="required">
			<option value="">Выберите состояние</option>
			<option value="1">Абсолютно новые</option>
			<option value="2">Часы «с пробегом»</option>
	</select>
</div>
<?php
echo $this->Form->input('deals', array('label' => 'Спецпредложение:', 'type' => 'checkbox'));
echo $this->Form->end('Создать');
?>
</div>