<a href="/admin/accessories/add" class="admin_add">Добавить материал</a>
<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><img src="/img/accessory/thumbs/<?=$item['Accessory']['img']?>"><p><?=$item['Accessory']['name']?></p>
<a href="/admin/accessories/edit/<?=$item['Accessory']['id']?>">Редактировать</a> |
<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Accessory']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	</li>
<?php endforeach ?>
</ul>