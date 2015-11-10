<?php

namespace ASilgalis\OxidModule\SymfonyDi\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class ExtensionLoader
{
    use ContainerBuilderAwareTrait;

    /**
     * @param ExtensionInterface $extension
     */
    public function load(ExtensionInterface $extension)
    {
        $container = $this->getContainerBuilder();
        $container->registerExtension($extension);
        $container->loadFromExtension($extension->getAlias());
        $container->compile();
    }
}
