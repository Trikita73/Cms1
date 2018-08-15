<?php

namespace Engine\di;

class di
{
	/**
	 * @var array
	 */
	private $container = [];

	/**
	 * @param $key
	 * @param $value
	 * @return $this
	 */
	public function set($key, $value)
	{
		$this->container[$key] = $value;
		return $this;
	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->has($key);
	}

	/**
	 * @param $key
	 * @return bool
	 */
	public function has($key)
	{
		return isset($this->contatiner[$key]) ? $this->contatiner[$key] : null;
	}
}
