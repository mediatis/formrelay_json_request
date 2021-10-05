<?php

namespace Mediatis\FormrelayJsonRequest;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\JsonRequest\JsonRequestInitialization;
use FormRelay\JsonRequest\JsonRequestRouteInitialization;

class Initialization
{
    public function initialize(RegistryInterface $registry)
    {
        JsonRequestInitialization::initialize($registry);
        JsonRequestRouteInitialization::initialize($registry);
    }
}
