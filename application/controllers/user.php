<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('Users');
	}
	public function index(){
		
	}

	public function login(){
		$email_address = $this -> input -> post('email_address');
		$password = $this -> input -> post('password');
		$user = new Users();
		$check_user = $user::login($email_address,$password);
		if($check_user){
			$session_data = array("email_address" => $email_address);
			$this -> session -> set_userdata($session_data);
			session_start();
			$data['user_info'] = $session_data;
			$view = "test_v";
			$this -> load -> view($view, $data);
		}
		else{
			$data['user_info'] = "Credential Invalid";
			$view = "test_v";
			$this -> load -> view($view, $data);
		}
	}

	public function logout(){
		$this -> session -> sess_destroy(); 
		session_destroy();

		$this -> load -> view("home_v");
	}
	
	public function sign_up(){
		
	}

	public function test_encryption(){
		$password = Users::encrypt_password("software");
		echo "{$password} <br />";		
	}

	public function get_password(){

	}

}
