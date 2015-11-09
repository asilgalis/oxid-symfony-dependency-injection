<?php

namespace ASilgalis\SymfonyDi\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;

trait ContainerBuilderAwareTrait
{
    use ContainerAwareTrait;

    /**
     * @return ContainerBuilder
     */
    public function getContainerBuilder()
    {
        return $this->getContainer();
    }
}
