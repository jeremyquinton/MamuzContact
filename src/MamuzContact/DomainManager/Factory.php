<?php

namespace MamuzContact\DomainManager;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;

class Factory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     * @return ServiceLocatorInterface
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //$domainManager = new ServiceManager;
        /** @var ServiceManager $serviceLocator */
        //$domainManager->addPeeringServiceManager($serviceLocator);

        return $serviceLocator;
    }

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return $this->createService($container);
    }

}
