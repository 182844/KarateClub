<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.x5QDzmu' shared service.

return $this->privates['.service_locator.x5QDzmu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'vikaEvent' => ['privates', '.errored..service_locator.x5QDzmu.App\\Entity\\VikaEvent', NULL, 'Cannot autowire service ".service_locator.x5QDzmu": it references class "App\\Entity\\VikaEvent" but no such service exists.'],
]);