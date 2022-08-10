<?php

require_once('Databaseable.php');
require_once('MyConnect.php');
class MyConnect
{
	private $conn;

	private $host;
	private $user;
	private $pass;
	private $dbname;
	private $port;

	private static $instance = null;

	private function __construct($host = 'localhost', $user = 'root', $pass = 'root', $dbname = 'mydb', $port = "3306")
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->port = $port;

		$this->conn = new PDO("mysql:host=".$this->host.":" . $this->port . ";dbname=".$this->dbname, $this->user, $this->pass);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public static function getInstance($host = 'localhost', $user = 'root', $pass = 'root', $dbname = 'mydb', $port = "3306")
	{
		if (self::$instance == null) {
			self::$instance = new MyConnect($host, $user, $pass, $dbname, $port);
		}

		return self::$instance;
	}

	public function query(string $sql)
	{
		//return $this->conn->query($sql);
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

	public function getInsertID()
	{
		return $this->conn->lastInsertId();
	}
}
