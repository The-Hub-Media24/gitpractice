<?php
class Comments
{
	public $name;
	public $email;
	public $comment;
	private $host;
	private $useraname;
	private $password;
	private $database;
	
	public function __construct()
	{
		$this->host = "127.0.0.1";
		$this->useraname="root";
		$this->password = "";
		$this->database = "pusruitgame";
		
		$this->myconnect();
	}
	
	function myconnect()
	{
		$host = "127.0.0.1";
		$useraname="root";
		$password = "";
		$database = "pusruitgame";
		$con=new mysqli('127.0.0.1','root','','pusruitgame');
	}
	
	function addComment()
	{
		$query = "INSERT name,email,comment FROM table VALUES('$name','$email','$comment')";
		$res = mysqli_query($this->myconnect(),$query);
		if($res)
		{
			return "success";
		}else{
			return "failed";
		}
	}
	
}
?>