<?php

class Link_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function add_link($name, $link){
        $this->db->insert('the_link',array(
            'name' => $name,
            'link' => $link,
            'datetime' => date('Y-m-d H:i:s')
        ));
        return $this->db->insert_id();
    }
    public function edit_link($id, $array_update){
        $this->db->where('id', $id)
            ->limit(1)
            ->update('the_link', $array_update); // $array_data = array('field'=>'value');
    }
    public function load_link($str_select, $array_where=false){
        return $this->db->select($str_select)
            // ->where($array_where)
            ->limit(30)
            ->order_by('id','desc')
            ->get('the_link')->result_array();
    }

}
