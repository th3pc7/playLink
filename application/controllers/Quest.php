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
			case 'login':
        $this->login_action();
				break;
			default:
				die();
		}
  }

	public function index(){
    $this->page->load_page('login_page', array(
      'page_data' => array(
        'title' => 'Login'
      )
    ));
  }

  private function login_action($username, $password){
    $username = c_text($this->input->post('username'));
    $password = c_text($this->input->post('password'));
    if($username===null||$password===null){ echo 'ใส่ข้อมูลให้ครบถ้วน'; }
    else{
      echo $this->account->login($this->input->post('username'), $this->input->post('password'));
    }
  }

}
