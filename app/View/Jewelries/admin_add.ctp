<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление нового материала</h2>
	</div>
<?php 
echo $this->Form->create('Jewelry', array('type' => 'file'));?>
<div class="input select">
	<label for="JewelryBrandId">Бренд:</label>
	<select name="data[Jewelry][brand_id]" id="JewelryBrandId" required="required">
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
?>
<div class="input select add_clock">
	<label for="JewelryType">Тип:</label>
	<select name="data[Jewelry][type]" id="JewelryType" required="required">
		<option value="">Выберите тип</option>
		<option value="1">Браслет</option>
		<option value="2">Запонки</option>
		<option value="3">Колье</option>
		<option value="4">Кольцо</option>
		<option value="5">Комплект</option>
		<option value="6">Крест</option>
		<option value="7">Подвеска</option>
		<option value="8">Серьги</option>
	</select>
</div>
<div class="input select add_clock">
	<label for="JewelryReceipts">Поступление:</label>
	<select name="data[Jewelry][receipts]" id="JewelryReceipts" required="required">
	<option value="">Выберите поступление</option>
			<option value="1">На заказ</option>
			<option value="2">Новые поступления</option>
			<option value="3">Ожидаемые поступления</option>
	</select>
</div>
<?php
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('equipment', array('label' => 'Комплектация:'));
echo $this->Form->input('condition', array('label' => 'Состояние:'));
echo $this->Form->input('other', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>
</div>