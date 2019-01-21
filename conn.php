<?php
class Db{
	
	public $db_host = 'localhost'; // Server Name
	public $db_user = 'root'; // Username
	public $db_pass = ''; // Password
	public $db_name = 'intern_project'; // Database Name

	public function connect(){
		$db = new mysqli( $db_host, $db_user, $db_pass, $db_name );
		if ( mysqli_connect_errno() ) {
			echo("Connection failed:".$mysqli_connect_error());
		}

	}
}
?>