<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._MJzVV6' shared service.

return $this->privates['.service_locator._MJzVV6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'registration' => ['privates', '.errored..service_locator._MJzVV6.App\\Entity\\Registration', NULL, 'Cannot autowire service ".service_locator._MJzVV6": it references class "App\\Entity\\Registration" but no such service exists.'],
]);
