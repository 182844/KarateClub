<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.g51lWGf' shared service.

return $this->privates['.service_locator.g51lWGf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'registration' => ['privates', '.errored..service_locator.g51lWGf.App\\Entity\\Registration', NULL, 'Cannot autowire service ".service_locator.g51lWGf": it references class "App\\Entity\\Registration" but no such service exists.'],
]);