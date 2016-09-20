<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page {
  public function __construct(){
    $this->CI =& get_instance();
  }

  public function load_page($page_name, $page_data){
    $this->CI->load->view($this->CI->account->default_app_view, array(
      'page' => 'page/'.$page_name,
      'page_data' => $page_data['page_data']
    ));
  }
  
  public function load_tmp($tmp_name, $page_data){
    if($page_data!==null&&array_key_exists('page_data', $page_data)){ $this->CI->load->view('tmp/'.$tmp_name, $page_data['page_data']); }
    else{ $this->CI->load->view('tmp/'.$tmp_name, $page_data); }
  }

}
