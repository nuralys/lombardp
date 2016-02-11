<?php 

debug($data);
 ?>

<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
	<img src="/img/clock/thumbs/<?=$data['Clock']['img']?>">
<?php 
echo $this->Form->create('Clock', array('type' => 'file'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('name', array('label' => 'Название:'));
?>
<div class="input select">
	<label for="ClockBrandId">Бренд:</label>
	<select name="data[Clock][brand_id]" id="ClockBrandId" required="required">
	<option>Выберите бренд</option>
		<?php foreach($brands as $key => $value): ?>
			<option value="<?=$key?>" <?php if($key==$data['Clock']['brand_id']) echo "selected" ?> ><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="input select">
	<label for="ClockSex">Кому:</label>
	<select name="data[Clock][sex]" id="ClockSex" required="required">
		<option>Выберите пол</option>
		<option value="1" <?php if(1==$data['Clock']['sex']) echo "selected" ?>>Мужские</option>
		<option value="2" <?php if(2==$data['Clock']['sex']) echo "selected" ?>>Женские</option>
		<option value="3" <?php if(3==$data['Clock']['sex']) echo "selected" ?>>Юнисекс</option>
	</select>
</div>
<div class="input select">
	<label for="ClockReceipts">Поступление:</label>
	<select name="data[Clock][receipts]" id="ClockReceipts" required="required">
		<option>Выберите поступление</option>
		<option value="1" <?php if(1==$data['Clock']['receipts']) echo "selected" ?>>На заказ</option>
		<option value="2" <?php if(2==$data['Clock']['receipts']) echo "selected" ?>>Новое поступление</option>
		<option value="3" <?php if(3==$data['Clock']['receipts']) echo "selected" ?>>Ожидаемые поступления</option>
	</select>
</div>
<div class="input select">
	<label for="ClockTypeId">Тип:</label>
	<select name="data[Clock][type_id]" id="ClockTypeId" required="required">
	<option>Выберите тип</option>
		<?php foreach($types as $key => $value): ?>
			<option value="<?=$key?>" <?php if($key==$data['Clock']['type_id']) echo "selected" ?> ><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="input select">
	<label for="ClockHullshape">Форма корпуса:</label>
	<select name="data[Clock][hullshape]" id="ClockHullshape" required="required">
	<option>------</option>
	<option>Выберите поступление</option>
	<option value="1" <?php if(1==$data['Clock']['hullshape']) echo "selected" ?>>Бочка</option>
	<option value="2" <?php if(2==$data['Clock']['hullshape']) echo "selected" ?>>Квадратная</option>
	<option value="3" <?php if(3==$data['Clock']['hullshape']) echo "selected" ?>>Круглая</option>
	<option value="4" <?php if(4==$data['Clock']['hullshape']) echo "selected" ?>>Овальная</option>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockHousingId">Материал корпуса:</label>
	<select name="data[Clock][housing_id]" id="ClockHousingId" required="required">
	<option>Выберите материал</option>
		<?php foreach($housings as $key => $value): ?>
			<option value="<?=$key?>" <?php if($key==$data['Clock']['housing_id']) echo "selected" ?> ><?=$value?>><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>
<div class="input select add_clock">
	<label for="ClockEquipment">Комплектация:</label>
	<select name="data[Clock][equipment]" id="ClockEquipment" required="required">
			<option value="">Выберите комплектацию</option>
			<option value="1" <?php if(1==$data['Clock']['equipment']) echo "selected" ?>>Нет (Grand-комплектация)</option>
			<option value="2" <?php if(2==$data['Clock']['equipment']) echo "selected" ?>>Да (Grand-комплектация)</option>
	</select>
</div>
<?php
echo $this->Form->input('watertightness', array('label' => 'Водонепроницаемость:'));
echo $this->Form->input('housing_diameter', array('label' => 'Диаметр корпуса:'));
echo $this->Form->input('price', array('label' => 'Цена:'));
echo $this->Form->input('collection', array('label' => 'Коллекция:'));
echo $this->Form->input('sale', array('label' => 'Скидка %:'));
echo $this->Form->input('glass', array('label' => 'Стекло:'));
echo $this->Form->input('dial_color', array('label' => 'Цвет циферблата:'));
echo $this->Form->input('type_mechanism', array('label' => 'Тип механизма:'));
echo $this->Form->input('options', array('label' => 'Функции:'));
echo $this->Form->input('power_reserve', array('label' => 'Запас хода:'));
echo $this->Form->input('caliber', array('label' => 'Калибр:'));
echo $this->Form->input('band_material', array('label' => 'Материал ремешка:'));
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('deals', array('label' => 'Спецпредложение:', 'type' => 'checkbox'));
echo $this->Form->end('Редактировать');
?>

</div>