<?php 

require_once DIR . '/../vendor/autoload.php';

use Engine\cms;
use Engine\di\di;

try 
{
	//Dependency injection
	$di = new di();

	$services = require __DIR__ . '/Config/Service.php';

	//Init services
	foreach($services as $service)
	{
		$provider = new $service($di);
		$provider->init();
	}

	$cms = new cms($di);
	$cms->run();

}catch (\ErrorException $e) {
	echo $e->getMessage();
}
