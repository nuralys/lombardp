<a href="/admin/reviews/add" class="admin_add">Добавить отзыв</a>
<ul class="admin_list">
<?php foreach($data as $item): ?>
	<li><img src="/img/review/thumbs/<?=$item['Review']['img']?>"><p><?=$item['Review']['title']?></p>
<a href="/admin/pages/edit/<?=$item['Review']['id']?>">Редактировать</a>
	</li>
<?php endforeach ?>
</ul>