<?php

class ClocksController extends AppController{

	public $uses = array('Clock', 'Brand', 'Housing');

	public function index(){
		$brands = $this->Brand->find('list');

		if(!empty($_GET['reference'])) $where['reference'] = 'reference='. '"' .$_GET['reference']. '"';
		if(!empty($_GET['grand'])) $where['grand'] = 'equipment='.$_GET['grand'];
		if(!empty($_GET['condition'])) $where['condition'] = 'condition_clock='.$_GET['condition'];
		if(!empty($_GET['sex'])) $where['sex'] = 'sex='.$_GET['sex'];
		if(!empty($_GET['receipts'])) $where['receipts'] = 'receipts='.$_GET['receipts'];
		if(!empty($_GET['sale'])) $where['sale'] = 'sale!=0';
		if(!empty($_GET['brand_id'])) $where['brand_id'] = 'brand_id='.$_GET['brand_id'];
		if(!empty($_GET['price'])) $where['prce'] = 'price<'.$_GET['price'];
		if(!empty($where)){
				$where = implode($where, " AND ");
			}
		$sql = "SELECT `Clock`.`id`, `Clock`.`brand_id`, `Clock`.`name`, `Clock`.`price`, `Clock`.`img`, `Clock`.`collection`, `Clock`.`sex`, `Clock`.`reference`, `Clock`.`type`, `Clock`.`housing_id`, `Clock`.`watertightness`, `Clock`.`housing_diameter`, `Clock`.`glass`, `Clock`.`dial_color`, `Clock`.`type_mechanism`, `Clock`.`options`, `Clock`.`power_reserve`, `Clock`.`caliber`, `Clock`.`band_material`, `Clock`.`equipment`, `Clock`.`condition_clock`, `Brand`.`id`, `Brand`.`title`, `Housing`.`id`, `Housing`.`title` FROM `lombardp_ac`.`clocks` AS `Clock` LEFT JOIN `lombardp_ac`.`brands` AS `Brand` ON (`Clock`.`brand_id` = `Brand`.`id`) LEFT JOIN `lombardp_ac`.`housings` AS `Housing` ON (`Clock`.`housing_id` = `Housing`.`id`)";
		if(isset($where) && $where!=''){
				$sql .= " WHERE ".$where;
			}
			// debug($where);
		$data = $this->Clock->query($sql);
		$title_for_layout = 'Купить дорогие швейцарские часы бу Астана';
		$this->set(compact('data', 'title_for_layout', 'brands'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Clock->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Clock->findById($id);
		// $filters = $this->Filter->find('all');
		$this->set(compact('data'));
	}

	public function admin_index(){
		$data = $this->Clock->find('all');
		$title_for_layout = 'Часы';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Clock->create();
			$data = $this->request->data['Clock'];
			// debug($this->request->data);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}

			if($this->Clock->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$brands = $this->Brand->find('list');
		$housings = $this->Housing->find('list');
		$title_for_layout = 'Добавление нового материала';
		$this->set(compact('title_for_layout', 'brands', 'housings'));
	}
}