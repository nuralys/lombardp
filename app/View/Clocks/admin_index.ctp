<a href="/admin/clocks/add" class="admin_add">Добавить материал</a>
<?php //debug($data); ?>
<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><img src="/img/clock/thumbs/<?=$item['Clock']['img']?>"><p><?=$item['Clock']['name']?></p>
<a href="/admin/clocks/edit/<?=$item['Clock']['id']?>">Редактировать</a>
	</li>
<?php endforeach ?>
</ul>