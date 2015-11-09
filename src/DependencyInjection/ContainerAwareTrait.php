<?php

namespace ASilgalis\SymfonyDi\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerInterface;

trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        // @codeCoverageIgnoreStart
        if ($this->container === null) {
            $this->container = \oxRegistry::get('container');
        }
        // @codeCoverageIgnoreEnd

        return $this->container;
    }
}
