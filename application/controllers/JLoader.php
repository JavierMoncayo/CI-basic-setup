<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class JLoader extends MY_Controller {
    
  public function __construct () {
    parent::__construct ();
    
    $this->load->model('M_jMenuItems','',TRUE);
  }
  
  /**
   * 
   */
  public function index(){
    
    $toView['menuItems'] = $this->M_jMenuItems->mGetMenuItems();
    
    $this->load->view('basic/menu', $toView);
  }
  
}
