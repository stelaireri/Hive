<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->view('header_v');
	}

	public function index()
	{
		$this->load->view('home_v');
		$this->load->view('footer_v');
	}

	public function learn_more()
	{
		echo "More Details Page";
		die;
		$this->load->view('more_details_v');
	}
	public function learn()
	{
		//echo "Learn Page"; die;
		$this->load->view('learn_v');
		$this->load->view('footer_v');
	}

	public function mentor()
	{
		//echo "Mentor Page"; die;
		$this->load->view('mentor_v');
		$this->load->view('footer_v');
	}

	public function outsource()
	{
		//echo "Outsource Page"; die;
		$this->load->view('outsource_v');
		$this->load->view('footer_v');
	}
}