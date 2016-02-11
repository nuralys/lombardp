<?php

class ReviewsController extends AppController{

	public $uses = array('Review');

	public function index(){
		$data = $this->Review->find('all', array(
			'order' => array('id' => 'desc')
		));
		$title_for_layout = 'Отзывы';
		$this->set(compact('title_for_layout', 'data'));
	}

	public function view($alias = null){
		if(is_null($alias)){
			throw new NotFoundException();
		}
		$data = $this->Review->findByAlias($alias);
		$title_for_layout = $data['Review']['title'];
		$meta['keywords'] = $data['Review']['keywords'];
		$meta['description'] = $data['Review']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta'));
	}

	public function admin_index(){
		$data = $this->Review->find('all');
		$title_for_layout = 'Отзывы';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Review->create();
			$data = $this->request->data['Review'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Review->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Review->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Review->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Review->id = $id;
			$data1 = $this->request->data['Review'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Review->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$title_for_layout = 'Редактирование материала';
			$this->set(compact('id', 'data', 'title_for_layout'));
		}
	}

	public function admin_delete($id){
		if (!$this->Review->exists($id)) {
			throw new NotFounddException('Такого материала нет');
		}
		if($this->Review->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}