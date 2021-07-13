<?php

namespace Mediatis\FormrelayJsonrequest;

use FormRelay\Core\Service\RegistryInterface;
use FormRelay\JsonRequest\JsonRequestInitialization;
use FormRelay\JsonRequest\JsonRequesRoutetInitialization;

class Initialization
{
    public function initialize(RegistryInterface $registry)
    {
        JsonRequestInitialization::initialize($registry);
        JsonRequestRouteInitialization::initialize($registry);
    }
}
