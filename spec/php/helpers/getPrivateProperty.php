<?php

function getPrivateProperty($className, $propertyName) {
	$reflector = new ReflectionClass($className);
	$property = $reflector->getProperty($propertyName);
	$property->setAccessible(true);

	return $property;
}

?>