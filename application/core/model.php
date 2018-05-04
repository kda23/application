<?php
class Model
{

	// Connect Database
	public function connect_db()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db_name = "BlogDB";

		$this->conn = new mysqli($servername, $username, $password, $db_name);

		// Check connection
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 
	}
}
?>