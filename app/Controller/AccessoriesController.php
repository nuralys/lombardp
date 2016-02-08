<?php

class AccessoriesController extends AppController{

	public $uses = array('Accessory', 'Brand', 'Housing');

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
		$sql = "SELECT `Accessory`.`id`, `Accessory`.`brand_id`, `Accessory`.`name`, `Accessory`.`price`, `Accessory`.`img`, `Accessory`.`collection`, `Accessory`.`sex`, `Accessory`.`reference`, `Accessory`.`type`, `Accessory`.`housing_id`, `Accessory`.`watertightness`, `Accessory`.`housing_diameter`, `Accessory`.`glass`, `Accessory`.`dial_color`, `Accessory`.`type_mechanism`, `Accessory`.`options`, `Accessory`.`power_reserve`, `Accessory`.`caliber`, `Accessory`.`band_material`, `Accessory`.`equipment`, `Accessory`.`condition_clock`, `Brand`.`id`, `Brand`.`title`, `Housing`.`id`, `Housing`.`title` FROM `lombardp_ac`.`clocks` AS `Accessory` LEFT JOIN `lombardp_ac`.`brands` AS `Brand` ON (`Accessory`.`brand_id` = `Brand`.`id`) LEFT JOIN `lombardp_ac`.`housings` AS `Housing` ON (`Accessory`.`housing_id` = `Housing`.`id`)";
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
		// $filters = $this->Filter->find('all');
		$this->set(compact('data'));
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
		$housings = $this->Housing->find('list');
		$title_for_layout = 'Добавление нового материала';
		$this->set(compact('title_for_layout', 'brands', 'housings'));
	}
}