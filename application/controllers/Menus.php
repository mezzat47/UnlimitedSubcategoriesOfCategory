<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

	/**
	 * Mdl_menus constructor.
	 */
	function __construct() {
		parent::__construct();
		$this -> load -> model('Mdl_menus');
	}


	function index() {
		$items	= $this->Mdl_menus->get_items();
		$menu	= $this->Mdl_menus->generateTree($items); 
		$data = array(
			'menu' => $menu,
		);
		$this->load->view('menu', $data, false);
	}


	public function store()
   	{
		$data = array('parent_id' => $this->input->post ('parent_id'),
						'name' => $this->input->post ('name'),
						'level' => $this->input->post ('level')
        			);

		echo $this->Mdl_menus->createCategory($data);
	}
	
}
