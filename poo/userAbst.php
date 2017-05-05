<?php
abstract class User{
	protected $username;
	public abstract function stateYourRole();

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}
}

class Admin extends User{
	public function stateYourRole(){
		return "admin";
	}
}

class Viewer extends User{
	public function stateYourRole(){
		return "viewer";
	}
}

$admin = new Admin();
$admin->setUsername("Balthazar");
echo $admin->stateYourRole();