<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'CalendarBundle\Controller\CalendarController' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\tattali\\calendar-bundle\\src\\Controller\\CalendarController.php';
include_once $this->targetDirs[3].'\\vendor\\tattali\\calendar-bundle\\src\\Serializer\\SerializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\tattali\\calendar-bundle\\src\\Serializer\\Serializer.php';

return $this->services['CalendarBundle\Controller\CalendarController'] = new \CalendarBundle\Controller\CalendarController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \CalendarBundle\Serializer\Serializer());
