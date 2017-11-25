<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public function __construct () {
    parent::__construct ();

    $this->loadThings ();
  }

  private function loadThings () {
    {
      $toLoad['jsFolder'] = 'js/';
      $toLoad['cssFolder'] = 'css/';
      $toLoad['title'] = 'test =D';

      $toLoad['js'] = array(
          "jquery-3.2.1.min.js",
          "gAnalytics.js");

      $toLoad['css'] = array(
          "myCss.css");

      $this->load->view ('basic/header', $toLoad);
    }
  }

}
