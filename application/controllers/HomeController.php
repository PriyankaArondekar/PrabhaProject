<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller {

	function __construct(){
        parent::__construct();
        
    }

	public function index()
	{
		
		$data['main_content']="home";
		$this->load->view('include/include_template',$data);

	}
}
