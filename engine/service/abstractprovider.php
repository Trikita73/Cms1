<?php

namespace Engine\Service;

abstract class AbstractProvider 
{
	/**
	 * @var \Engine\di\di;
	 */
	protected $di;

	public function __construct(\Engine\di\di $di)
	{
		$this->di = $di;
	}

	/**
	 * @return mixed
	 */
	abstract function init();
}