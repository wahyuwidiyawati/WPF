<?php
class login{
		protected $user ;
		protected $pass ;
		
		public function __construct($user,$pass){
			$this->username = $user;
			$this->pass = $pass;
		}
		
		public function pengguna(){
			if($this->username == "admin" && $this->pass  == admin)
			{
				header("location:admin.php");
			}
			else if($this->username == "petugas" && $this->pass  == petugas)
			{
				header("location:index.php");
			}
			else{
				header("location:admin.php");
			}
		}
	}	
?>