<?php 

namespace Engine;

class cms
{
	/**\
	 * @var di
	 */
	private $di;

	public $router;

	/**
	 * cms constructor
	 * @param $di 
	 */
	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

	/**
	 * Run cms
	 */
	public function run()
	{
			print_r($this->di);
	}
}