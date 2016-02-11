<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 
echo $this->Form->create('Jewelry', array('type' => 'file'));
echo $this->Form->input('name', array('label' => 'Название:'));
if(!empty($data['Jewelry']['img'])){?>
	<img src="/img/jewelry/thumbs/<?=$data['Jewelry']['img']?>">
<?php 
}
echo $this->Form->input('img', array('label' => '', 'type' => 'file'))
 ?>
<div class="input select">
	<label for="JewelryBrandId">Бренд:</label>
	<select name="data[Jewelry][brand_id]" id="JewelryBrandId" required="required">
	<option>Выберите бренд</option>
		<?php foreach($brands as $key => $value): ?>
			<option value="<?=$key?>" <?php if($key==$data['Jewelry']['brand_id']) echo "selected" ?> ><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>

<div  class="input select">
	<label for="JewelryReceipts">Поступление:</label>
	<select name="data[Jewelry][receipts]" id="JewelryReceipts" required="required">
		<option>Выберите поступление</option>
		<option value="1" <?php if(1==$data['Jewelry']['receipts']) echo "selected" ?>>На заказ</option>
		<option value="2" <?php if(2==$data['Jewelry']['receipts']) echo "selected" ?>>Новое поступление</option>
		<option value="3" <?php if(3==$data['Jewelry']['receipts']) echo "selected" ?>>Ожидаемые поступления</option>
	</select>
</div>
<div class="input select">
	<label for="JewelryType">Тип:</label>
	<select name="data[Jewelry][type]" id="JewelryType" required="required">
		<option value="">Выберите тип</option>
		<option value="1" <?php if(1==$data['Jewelry']['type']) echo "selected" ?>>Браслет</option>
		<option value="2" <?php if(2==$data['Jewelry']['type']) echo "selected" ?>>Запонки</option>
		<option value="3" <?php if(3==$data['Jewelry']['type']) echo "selected" ?>>Колье</option>
		<option value="4" <?php if(4==$data['Jewelry']['type']) echo "selected" ?>>Кольцо</option>
		<option value="5" <?php if(5==$data['Jewelry']['type']) echo "selected" ?>>Комплект</option>
		<option value="6" <?php if(6==$data['Jewelry']['type']) echo "selected" ?>>Крест</option>
		<option value="7" <?php if(7==$data['Jewelry']['type']) echo "selected" ?>>Подвеска</option>
		<option value="8" <?php if(8==$data['Jewelry']['type']) echo "selected" ?>>Серьги</option>
	</select>
</div>

<?php
echo $this->Form->input('price', array('label' => 'Цена:'));
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('equipments', array('label' => 'Комплектация:'));
echo $this->Form->input('condition', array('label' => 'Состояние:'));
echo $this->Form->input('other', array('label' => 'Описание:'));
echo $this->Form->end('Редактировать');
?>

</div>