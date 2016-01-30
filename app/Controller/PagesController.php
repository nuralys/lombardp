<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	// public $uses = array('Page');

	public function home(){
		
		// $recommended = $this->Product->find('all', array(
		// 	'conditions' => array('category_id' => 5)
		// 	));

		$this->view = 'home';
		$title_for_layout = 'Интернет магазин женской одежды';
		$this->set(compact('title_for_layout'));
	}

	public function admin_index(){
		
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
}
