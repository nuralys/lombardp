<a href="/admin/accessories/add">Добавить материал</a>
<?php debug($data); ?>
<ul>
<?php foreach($data as $item): ?>
	<li><img src="/img/accessory/thumbs/<?=$item['Accessory']['img']?>"><p><?=$item['Accessory']['name']?></p>
<a href="/admin/accessories/edit/<?=$item['Accessory']['id']?>">Редактировать</a>
	</li>
<?php endforeach ?>
</ul>