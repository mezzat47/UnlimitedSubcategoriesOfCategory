<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Mdl_menus extends CI_Model {

	/**
	 * Mdl_menus constructor.
	 */
	function __construct() {
    parent::__construct();
    
    $this->tableName = 'menus';
  }
	
	
  function get_items() {
    $this->db->select('*');
    $this->db->from($this->tableName);
    $this->db->order_by('parent_id');
    $this->db->order_by('level');
    $query = $this->db->get();
    return $query->result_array();
  }
	
	
  function generateTree($items = array(), $parent_id = 0){
    $tree = '<ul class = "list" >';
    for($i=0, $ni=count($items); $i < $ni; $i++){
    	if($items[$i]['parent_id'] == $parent_id){
    		$tree .= '<li id= "'. $items[$i]['id'].'" data-level="'.$items[$i]['level'].'">';
    		$tree .= $items[$i]['name'];
    		$tree .= $this->generateTree($items, $items[$i]['id']);
    		$tree .= '</li>';
    	}
    }
    $tree .= '</ul>';
    return $tree;
  }

function createCategory($data){
      if (empty ($data))
              {
                  return false;
              }

              if (! isset($data ['parent_id']))
              {
                  $data ['parent_id'] = 0;
              }

              $this->db->insert ('menus', $data);

              $data ['id'] = $this->db->insert_id ();

			return $this->generateTree([$data], $data['parent_id']);
    }
	
	
} // End of Model Class	
	
