<div class="title admin_t">
		<h2>Добавление отзыва</h2>
	</div>
<?php 

echo $this->Form->create('Review', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'ФИО', 'class' => 'admin_input_f model '));
echo $this->Form->input('body', array('label' => 'Текст отзыва', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('position', array('label' => 'Должность', 'class' => 'admin_input_f model ', 'placeholder' => 'Директор ТОО АКАС'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>