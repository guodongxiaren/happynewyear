<?php
class DBHelper {

	private $hostname;
	private $username;
	private $password;
	private $database;

	private function __construct() {}

	private function __clone() {}

	public static function getConnect() {
		$xml = simplexml_load_file("config/config.xml");
		$hostname = $xml->dbinfo->hostname;
		$username = $xml->dbinfo->username;
		$password = $xml->dbinfo->password;
		$database = $xml->dbinfo->database;					

		return 	new mysqli($hostname, $username, $password, $database);
	}
}
?>