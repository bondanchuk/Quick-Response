<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function __construct()
      {
          parent::__construct();
      $this->load->helper(array('url', 'form'));
                     }

	public function index()
	{
   		$this->load->view('Kontak');
	}
}
