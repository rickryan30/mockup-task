<?php

/**
 * DB Class - A custom and simple object oriented database class
 *
 * Copyright 2019
 * @author Ray U. Abanid
 * @version v1.0
 */

class DB {

	protected $DB_con;
	protected $_table;
	protected $query;

	private $DB_HOST = 'localhost';
	private $DB_USERNAME = 'root';
	private $DB_PASSWORD = '';
	private $DB_NAME = 'e_learning';
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->connect();
	}

	/**
	 * Database connection
	 */
	private function connect()
	{
		try{
			$this->DB_con = new PDO("mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}",$this->DB_USERNAME,$this->DB_PASSWORD);
			$this->DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die('Failed to connect to DB: '.$e->getMessage());
		}
	}

	/**
	 * Close connection
	 */
	public function close()
	{
		$this->DB_con = null;
	}

}
	
	