<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><p><?=$item['Page']['title']?></p>
<a href="/admin/pages/edit/<?=$item['Page']['id']?>">Редактировать</a>
	</li>
<?php endforeach ?>
</ul>