<?php

class AccessoriesController extends AppController{

	public $uses = array('Accessory', 'Brand');

	public function index(){
		$brands = $this->Brand->find('list', array(
			'conditions' => array('type' => 'accessories')
		));

		if(!empty($_GET['reference'])) $where['reference'] = 'reference='.$_GET['reference'];
		if(!empty($_GET['brand_id'])) $where['brand_id'] = 'brand_id='.$_GET['brand_id'];
		if(!empty($_GET['price'])) $where['prce'] = 'price<='.$_GET['price'];
		if(!empty($where)){
				$where = implode($where, " AND ");
			}
		$sql = "SELECT `Accessory`.`id`, `Accessory`.`brand_id`, `Accessory`.`name`, `Accessory`.`price`, `Accessory`.`img`, `Accessory`.`reference`, `Accessory`.`equipment`,  `Brand`.`id`, `Brand`.`title` FROM `lombardp_ac`.`accessories` AS `Accessory` LEFT JOIN `lombardp_ac`.`brands` AS `Brand` ON (`Accessory`.`brand_id` = `Brand`.`id`)";
		if(isset($where) && $where!=''){
				$sql .= " WHERE ".$where;
			}
			// debug($where);
		$data = $this->Accessory->query($sql);
		$title_for_layout = 'Купить дорогие швейцарские часы бу Астана';
		$this->set(compact('data', 'title_for_layout', 'brands'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Accessory->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Accessory->findById($id);
		$brand_id = $data['Accessory']['brand_id'];
		$brand = $this->Brand->findById($brand_id);
		$title_for_layout = 'Аксессуары';
		$this->set(compact('data', 'title_for_layout', 'brand'));
	}

	public function admin_index(){
		$data = $this->Accessory->find('all');
		$title_for_layout = 'Аксессуары';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Accessory->create();
			$data = $this->request->data['Accessory'];
			// debug($this->request->data);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}

			if($this->Accessory->save($data)){
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
}