<?php

function getPrivateMethod($className, $methodName) {
	$reflector = new ReflectionClass($className);
	$method = $reflector->getMethod($methodName);
	$method->setAccessible(true);

	return $method;
}

?>