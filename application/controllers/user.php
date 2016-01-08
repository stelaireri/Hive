<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
		echo "User Controller";
	}

	public function login(){
		echo "<pre>"; print_r($_POST); echo "</pre>";
		$username = $this -> input -> post('username');
		//$username = $this->input->post('username');
		//echo "Action after registration!";
	}

	public function sign_up(){
		echo "<pre>"; print_r($_POST); echo "</pre>";
		//echo "Action after registration!";
	}
}
