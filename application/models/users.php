<?php
class Users extends Doctrine_Record{
	public function setTableDefinition(){
		$this->hasColumn('first_name', 'varchar', 45);
		$this->hasColumn('last_name', 'varchar', 45);
		$this->hasColumn('email_address', 'varchar', 45, array('unique' => 'true'));
		$this->hasColumn('password', 'varchar', 100);
		$this->hasColumn('date_of_birth', 'date');
	}

	public static function login($email_address, $password){
		$hPassword = Users::encrypt_password($password);
		$query = Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAll("
			SELECT * FROM users WHERE email_address = '" . $email_address . "' AND password ='" . $hPassword . "'");
		return $query[0];
	}

	public static function encrypt_password($password){
		$salt = "#chumvi$";
		$password = md5($password, $salt);
		return $password;
	}

	public static function get_password(){
		$query = Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAll("
			SELECT password FROM users");
		return $query[0]['password'];
	}

	public function save_user(){
		
	}

}
?>