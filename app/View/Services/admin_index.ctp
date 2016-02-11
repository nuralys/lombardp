<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><p><?=$item['Article']['title']?></p>
<a href="/admin/articles/edit/<?=$item['Article']['id']?>">Редактировать</a>
	</li>
<?php endforeach ?>
</ul>