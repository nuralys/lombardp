<?php

class JewelriesController extends AppController{

	public $uses = array('Jewelry', 'Brand');

	public function index(){
		$brands = $this->Brand->find('list', array(
			'conditions' => array('type' => 'jewelries')
		));

		if(!empty($_GET['reference'])) $where['reference'] = 'reference='. "'". $_GET['reference'] ."'";
		if(!empty($_GET['brand_id'])) $where['brand_id'] = 'brand_id='.$_GET['brand_id'];
		if(!empty($_GET['price'])) $where['price'] = 'price<='.$_GET['price'];
		if(!empty($_GET['type'])) $where['type'] = '`Jewelry`.`type`='.$_GET['type'];
		if(!empty($_GET['receipts'])) $where['receipts'] = 'receipts='.$_GET['receipts'];
		if(!empty($where)){
				$where = implode($where, " AND ");
			}
		$sql = "SELECT `Jewelry`.`id`, `Jewelry`.`brand_id`, `Jewelry`.`name`, `Jewelry`.`price`, `Jewelry`.`img`, `Jewelry`.`reference`, `Jewelry`.`type`, `Jewelry`.`equipment`,  `Brand`.`id`, `Brand`.`title` FROM `lombardp_ac`.`jewelries` AS `Jewelry` LEFT JOIN `lombardp_ac`.`brands` AS `Brand` ON (`Jewelry`.`brand_id` = `Brand`.`id`)";
		if(isset($where) && $where!=''){
				$sql .= " WHERE ".$where;
			}
			// debug($where);
		$data = $this->Jewelry->query($sql);
		$title_for_layout = 'Купить ювелирные украшения Астана';
		$this->set(compact('data', 'title_for_layout', 'brands'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Jewelry->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Jewelry->findById($id);
		$brand_id = $data['Jewelry']['brand_id'];
		$brand = $this->Brand->findById($brand_id);
		$title_for_layout = 'Аксессуары';
		$this->set(compact('data', 'title_for_layout', 'brand'));
	}

	public function admin_index(){
		$data = $this->Jewelry->find('all');
		$title_for_layout = 'Аксессуары';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Jewelry->create();
			$data = $this->request->data['Jewelry'];
			// debug($this->request->data);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}

			if($this->Jewelry->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$brands = $this->Brand->find('list', array(
			'conditions' => array('type' => 'accessories')
		));
		$title_for_layout = 'Добавление нового материала';
		$this->set(compact('title_for_layout', 'brands'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Jewelry->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Jewelry->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Jewelry->id = $id;
			$data1 = $this->request->data['Jewelry'];
			if(!isset($data1['img']['name']) || !$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Jewelry->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$brands = $this->Brand->find('list', array(
			'conditions' => array('type' => 'jewelries')
			));
			$title_for_layout = 'Редактирование материала';
			$this->set(compact('id', 'data', 'brands', 'title_for_layout'));
		}
	}

	public function admin_delete($id){
		if (!$this->Jewelry->exists($id)) {
			throw new NotFounddException('Такого материала нет');
		}
		if($this->Jewelry->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}
}