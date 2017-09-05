<?php

// my database class

class Db {
	
	public $mysql;
	
	function __construct() {
		$this->mysql = new mysqli('localhost', 'root', 'root', 'db') or die("problem");
	}
	
	function delete_by_id($id) {
		$query = "DELETE from todo WHERE id = $id";
		$result = $this->mysql->query($query) or die("There was a problem");
		
		if($result) return 'yay!';
	}
	
} // end class


