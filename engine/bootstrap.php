<?php 

use Engine\cms;
use Engine\di\di;

try 
{
	//Dependency injection
	$di = new di();

	$cms = new cms($di);
	$cms->run();

}catch (\ErrorException $e) {
	echo $e->getMessage();
}
