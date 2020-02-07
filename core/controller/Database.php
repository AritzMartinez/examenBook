<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bdf8ec33b5fa21";$this->pass="9c86d536";$this->host="us-cdbr-iron-east-04.cleardb.net";$this->ddbb="heroku_cd33c3fffed1217";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
