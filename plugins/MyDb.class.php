<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyDb.class.php
Description: PDO wrapper
*/
include_once("core/IDb.class.php");

class MyDb implements IDb
{
	private $host = '';
	private $db = '';
	private $user = '';
	private $pass = '';
	private $charset = 'utf8mb4';
	public $pdo;
	private $dsn;

	public function __construct()
	{
		$config = json_decode(file_get_contents("config"));

		$this->host = $config->db_host;
		$this->db = $config->db_name;
		$this->user = $config->db_user;
		$this->pass = $config->db_pass;

		$this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";

		$this->options = [
		   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		   PDO::ATTR_EMULATE_PREPARES => false,
		];

		return $this->connect();
	} 

	public function connect()
	{
		try {
               $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->options);
          } catch (\PDOException $e) {
               throw new \PDOException($e->getMessage());
          }

          return $this->pdo;
	}

	public function queryForCols($tbl, $cols)
	{
          $ret = [];
          $selCols = "";
          
          foreach(explode(',',$cols) as $col)
          {
               $selCols .= $col.",";
          }

          $selCols = trim($selCols,",");

          $stmt = $this->pdo->query('SELECT '.$selCols.' FROM '.$tbl.' limit 10');
          return $stmt->fetchAll();
	}

	public function queryAll($q)
	{
          $stmt = $this->pdo->query($q);
          return $stmt->fetchAll();
	}
}
?>