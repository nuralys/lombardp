<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 
echo $this->Form->create('Accessory', array('type' => 'file'));
echo $this->Form->input('name', array('label' => 'Название:'));
if(!empty($data['Accessory']['img'])){?>
	<img src="/img/accessory/thumbs/<?=$data['Accessory']['img']?>">
<?php 
}
echo $this->Form->input('img', array('label' => '', 'type' => 'file'))
 ?>
<div class="input select">
	<label for="AccessoryBrandId">Бренд:</label>
	<select name="data[Accessory][brand_id]" id="AccessoryBrandId" required="required">
	<option>Выберите бренд</option>
		<?php foreach($brands as $key => $value): ?>
			<option value="<?=$key?>" <?php if($key==$data['Accessory']['brand_id']) echo "selected" ?> ><?=$value?></option>
		<?php endforeach; ?>
	</select>
</div>

<?php
echo $this->Form->input('price', array('label' => 'Цена:'));
echo $this->Form->input('reference', array('label' => 'Референс:'));
echo $this->Form->input('equipment', array('label' => 'Комплектация:'));
echo $this->Form->input('condition', array('label' => 'Состояние:'));
echo $this->Form->input('other', array('label' => 'Описание:'));
echo $this->Form->end('Редактировать');
?>

</div>