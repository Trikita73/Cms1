<?php

namespace Engine\Core\Database;

use \PDO;

class Connection 
{
	private $link;

	/**
	 *Connection constructor.
	 */
	public function __constructor()
	{
		$this->connect();
	}

	/**
	 * @return $this
	 */
	private function connect()
	{
		$config = [
			'host'     => 'localhost',
			'db name'  => 'cms1altcom',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8'
		];

		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

		$this->link = new PDO($dsn, $config['username'], $config['password']);

		return $this;
	}

	/**
	 * @param $sql
	 * @return mixed 
	 */
	public function execute($sql)
	{
		$sth = $this->link->prepare($sql);

		return $sth->execute();
	}

	/**
	 * @param $sql
	 * @return array
	 */
	public function query($sql)
	{
		$sth = $this->link->prepare($sql);

		$sql->execute();

		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		if($return === false) {
			return [];
		}
		return $result;
	}
}