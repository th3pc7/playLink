<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quest extends CI_Controller {

  public function __construct(){
		parent::__construct();
		if($this->account->class!=='quest'){
      echo 'Fail permission.';
			die();
		}
	}

  public function action(){
    $action_name = $this->input->post('action');
		if($action_name===null){ die(); }
		switch($action_name){
			case 'add_link':
        $this->add_link();
				break;
      case 'ref_table':
        $this->load->model('link_model');
        $this->page->load_tmp('table_link_tmp', array(
          'page_data' => array(
            'links_data' => $this->link_model->load_link('*', null)
        )));
        break;
      case 'edit':
        $this->load->model('link_model');
        $this->link_model->edit_link($this->input->post('id'), array(
          $this->input->post('type') => $this->input->post('value')
        ));
        echo 'pass';
        break;
      case 'edit_st':
        $this->load->model('link_model');
        $this->link_model->edit_link($this->input->post('id'), array(
          'status' => $this->input->post('value')
        ));
        echo 'pass';
        break;
      case 'give_me_link':
        $this->give_me_link();
        break;
			default:
				die();
		}
  }

	public function index(){
    $this->load->model('link_model');
    $this->page->load_page('add_link_page', array(
      'page_data' => array(
        'title' => 'kan-eng.com | add_link',
        'links_data' => $this->link_model->load_link('*', null)
      )
    ));
  }

  public function give_me_link(){
    $this->load->model('link_model');
    $dataLink = $this->link_model->load_link('*', null);
    $str = 'var arr_link = [];';
    foreach($dataLink as $link){
      if($link['status']!=='active'){ continue; }
      $str = $str.'arr_link.push({name:"'.$link['name'].'", link:"'.$link['link'].'"});';
    }
    echo $str;
  }

  private function add_link(){
    $this->load->model('link_model');
    $name = c_text($this->input->post('name'));
    $link = c_text($this->input->post('link'));
    if($name===null||$link===null){ echo 'ใส่ข้อมูลให้ครบถ้วน'; }
    else{
      $this->link_model->add_link($name, $link);
      echo 'pass';
    }
  }

}
