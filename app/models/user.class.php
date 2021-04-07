<?php 

Class User 
{
	private $error = "";

	public function daftar($POST)
	{
		$data = array();
		$db = Database::getInstance();

		$data['name'] 		= trim($POST['name']);
		$data['email'] 		= trim($POST['email']);
		$data['password'] 	= trim($POST['password']);
		$password2 			= trim($POST['password2']);

		if($data['password'] !== $password2)
		{
			$this->error .= "Passwords do not match <br>";
		}

		if($this->error == ""){
			//save
			$data['password'] = hash('sha1',$data['password']);

			$query = "insert into users (name,email,password) values (:name,:email,:password)";
			$result = $db->write($query,$data);

			if($result){

				header("Location: " . ROOT . "login");
				die;
			}

		}

		$_SESSION['error'] = $this->error;

	}

	public function login($POST)
	{

		$data = array();
		$db = Database::getInstance();

		$data['email'] 		= trim($POST['email']);
		$data['password'] 	= trim($POST['password']);

		if($this->error == ""){

			//comfirm
			$data['password'] = hash('sha1',$data['password']);

			//check if email already exists
			$sql = "select * from users where email = :email && password = :password";
			$result = $db->read($sql,$data);
			if(is_array($result)){
				
				$_SESSION['user_url'] = $result[0]->url_address;
				header("Location: " . ROOT . "home");
				die;
			}

			$this->error .= "Wrong email or password <br>";

		}

		$_SESSION['error'] = $this->error;
	}


	public function get_user($url)
	{

	}


	public function check_login($redirect = false, $allowed = array())
	{

		$db = Database::getInstance();

		if(count($allowed) > 0){
		
			$arr['url'] = $_SESSION['user_url'];
			$query = "select * from users where url_address = :url limit 1";
			$result = $db->read($query,$arr);
				
			if(is_array($result))
			{
				$result = $result[0];
				if(in_array($result->rank, $allowed)){

					return $result;
				}

			}
			
			header("Location: " . ROOT . "login");
			die;

		}else{
			if(isset($_SESSION['user_url']))
			{
				$arr = false;
				$arr['url'] = $_SESSION['user_url'];
				$query = "select * from users where url_address = :url limit 1";

				$result = $db->read($query,$arr);
				
				if(is_array($result))
				{
					return $result[0];
				}
			}

			if($redirect){
				header("Location: " . ROOT . "login");
				die;
			}
		}

		return false;

	}

	public function logout()
	{

		if(isset($_SESSION['user_url']))
		{
			unset($_SESSION['user_url']);
		}

		header("Location: " . ROOT . "home");
		die;
	}


}