<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.IPxB2LO' shared service.

return $this->privates['.service_locator.IPxB2LO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'paiement' => ['privates', '.errored..service_locator.IPxB2LO.App\\Entity\\Paiement', NULL, 'Cannot autowire service ".service_locator.IPxB2LO": it references class "App\\Entity\\Paiement" but no such service exists.'],
]);
