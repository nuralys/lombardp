<h3>Редактирование</h3>
<?php 
echo $this->Form->create('Article', array('type' => 'file'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('id' => 'editor'));
echo $this->Form->input('date');
echo $this->Form->input('keywords');
echo $this->Form->input('description');
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>