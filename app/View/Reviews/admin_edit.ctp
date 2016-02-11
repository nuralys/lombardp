<h3>Редактирование отзыва</h3>
<img src="/img/review/thumbs/<?=$data['Review']['img']?>">
<?php 
echo $this->Form->create('Review');
echo $this->Form->input('title', array('label' => 'ФИО'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст:'));
echo $this->Form->input('position', array('label' => 'Должность'));
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>