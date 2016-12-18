<?php

include('class.password.php');

class User extends Password{

    private $db;
	
	function __construct($db){
		parent::__construct();
	
		$this->_db = $db;
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}		
	}

	private function get_user_hash($username){	

		try {

			$stmt = $this->_db->prepare('SELECT password FROM blog_members WHERE username = :username');
			$stmt->execute(array('username' => $username));
			
			$row = $stmt->fetch();
			return $row['password'];

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}

	
	public function login($username,$password){	

		$hashed = $this->get_user_hash($username);
		
		if($this->password_verify($password,$hashed) == 1){
		    $stmt = $this->_db->prepare('SELECT role,memberID,username FROM blog_members WHERE username = :username');
			$stmt->execute(array('username' => $username));
			$row = $stmt->fetch();
				
		    
		    $_SESSION['loggedin'] = true;
			$_SESSION["loginuserId"] = $row['memberID'];
				$_SESSION["loginusername"] = $row['username'];
		    return true;
			
		}		
	}
	
		public function login_user_role($username,$password){	
		
		
		$hashed = $this->get_user_hash($username);
		
		if($this->password_verify($password,$hashed) == 1){
		
		$stmt = $this->_db->prepare('SELECT role,memberID,username FROM blog_members WHERE username = :username');
			$stmt->execute(array('username' => $username));
			$row = $stmt->fetch();
				
		    if(strcmp($row['role'],"2")== 0){
		    $_SESSION['loggedin'] = true;
			$_SESSION["loginuserId"] = $row['memberID'];
				$_SESSION["loginusername"] = $row['username'];
		    return true;
			}
		}		
	}
	
		
	public function logout(){
		session_destroy();
	}
	
}


?>