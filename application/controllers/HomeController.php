<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('listingModel');
        
    }

	public function index()
	{
		$data['categories']=$this->listingModel->all_category();
		$data['cities']=$this->listingModel->top_cities();
		$data['list']=$this->listingModel->all_listing();
		$data['main_content']="home";
		$this->load->view('include/include_template',$data);
	}

	//filter listing by category id
	public function filterCategory()
	{
		$categoryId= $this->uri->segment(3);
		$data['categories']=$this->listingModel->all_category();
		$data['cities']=$this->listingModel->top_cities();
		$data['list']=$this->listingModel->filter_category_listing($categoryId);
		$data['main_content']="home";
		$this->load->view('include/include_template',$data);
	}

	//filter listing by cities id
	public function filterCity()
	{
		$cityId= $this->uri->segment(3);
		$data['categories']=$this->listingModel->all_category();
		$data['cities']=$this->listingModel->top_cities();
		$data['list']=$this->listingModel->filter_city_listing($cityId);
		$data['main_content']="home";
		$this->load->view('include/include_template',$data);
	}
}
