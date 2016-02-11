<?php

class ArticlesController extends AppController{

	public $uses = array('Article');

	public function index(){
		
		$title_for_layout = 'Полезная информация';
		$this->set(compact('title_for_layout'));
	}

	public function view($alias = null){
		if(is_null($alias)){
			throw new NotFoundException();
		}
		$data = $this->Article->findByAlias($alias);
		$title_for_layout = $data['Article']['title'];
		$meta['keywords'] = $data['Article']['keywords'];
		$meta['description'] = $data['Article']['description'];

		$this->set(compact('data', 'title_for_layout', 'meta'));
	}

	public function admin_index(){
		$data = $this->Article->find('all');
		$title_for_layout = 'Аксессуары';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Article->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Article->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Article->id = $id;
			$data1 = $this->request->data['Article'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Article->save($data1)){
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
		if (!$this->Article->exists($id)) {
			throw new NotFounddException('Такого материала нет');
		}
		if($this->Article->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}