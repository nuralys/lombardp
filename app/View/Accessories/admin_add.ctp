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
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('equipment', array('label' => 'Комплектация:'));
echo $this->Form->input('condition', array('label' => 'Состояние:'));
echo $this->Form->input('other', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>
</div>