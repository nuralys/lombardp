<?php

class ServicesController extends AppController{

	public $uses = array('Article', 'Service');

	public function index(){
		$title_for_layout = 'Услуги';
		$this->set(compact('title_for_layout'));
	}

	public function admin_index(){
		$data = $this->Article->find('all');
		$this->set(compact('data'));
	}

	
}