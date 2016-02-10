<a href="/admin/jewelries/add" class="admin_add">Добавить материал</a>
<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><img src="/img/jewelry/thumbs/<?=$item['Jewelry']['img']?>"><p><?=$item['Jewelry']['name']?></p>
<a href="/admin/jewelries/edit/<?=$item['Jewelry']['id']?>">Редактировать</a> |
<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Jewelry']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	</li>
<?php endforeach ?>
</ul>