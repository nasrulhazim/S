<?php

class S extends \Slim\Slim {

	public $contents = [
		'status' => true,
		'message' => ''
	];

	public $acl = [];

	public $twig;

	public function isAuthorized($api) {
		
		if($this->isLogin()) {
			if(count($this->acl) > 0 && isset($this->acl[$api])) {
				$user = Session::read('User');
				if(in_array($user->role_id, $this->acl[$api])) {
					return true;
				}
			}
		}

		$this->contents['status'] = false;
		$this->contents['message'] = 'You are not authorized to access this location';
		$this->output();

		return false;
	}

	public function isLogin($key = 'User') {
		return Session::read($key);
	}

	public function outputJson() {
		echo json_encode($this->contents);
	}
}