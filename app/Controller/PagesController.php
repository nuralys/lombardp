<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Page', 'Brand', 'Clock');

	public function home(){
		
		// $recommended = $this->Product->find('all', array(
		// 	'conditions' => array('category_id' => 5)
		// 	));

		$this->view = 'home';
		$sql = "SELECT `Clock`.`id`, `Clock`.`brand_id`, `Clock`.`name`, `Clock`.`price`, 
		`Clock`.`img`, `Brand`.`id`, `Brand`.`title`, `Housing`.`id`, `Housing`.`title`
		FROM `lombardp_ac`.`clocks` AS `Clock` 
		LEFT JOIN `lombardp_ac`.`brands` AS `Brand` ON (`Clock`.`brand_id` = `Brand`.`id`)
		LEFT JOIN `lombardp_ac`.`housings` AS `Housing` ON (`Clock`.`housing_id` = `Housing`.`id`) 
		WHERE `Clock`.`deals`=1 ORDER BY `Clock`.`id` DESC LIMIT 4";
		$deals = $this->Clock->query($sql);
		$title_for_layout = 'Интернет магазин женской одежды';
		$this->set(compact('title_for_layout', 'deals'));
	}

	public function admin_index(){
		$data = $this->Page->find('all');
		$this->set(compact('data'));
	}

	public function index($page_alias = null){
		if(is_null($page_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$page = $this->Page->findByAlias($page_alias);
		if(!$page){
			throw new NotFoundException("Такой страницы нету");
		}
		
		$title_for_layout = $page['Page']['title'];
		$meta['keywords'] = $page['Page']['keywords'];
		$meta['description'] = $page['Page']['description'];
		$this->set(compact('page_alias', 'page', 'title_for_layout', 'meta'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Page->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Page->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Page->id = $id;
			$data1 = $this->request->data['Page'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Page->save($data1)){
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
}
