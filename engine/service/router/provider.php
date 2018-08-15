<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
	/**
	 * @var string
	 */
	public $serviseName = 'router';

	/**
	 * @return mixed
	 */
	public function init()
	{
		$router = new Router('http://cms.loc/');

		$this->di->set($this->serviceName, 	$router);
	}
}