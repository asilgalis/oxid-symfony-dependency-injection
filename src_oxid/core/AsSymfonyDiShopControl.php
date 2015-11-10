<?php

use ASilgalis\OxidModule\SymfonyDi\DependencyInjection\ContainerAwareTrait;
use ASilgalis\OxidModule\SymfonyDi\DependencyInjection\ExtensionLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @codeCoverageIgnore
 */
class AsSymfonyDiShopControl extends AsSymfonyDiShopControl_parent
{
    use ContainerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function start($sClass = null, $sFunction = null, $aParams = null, $aViewsChain = null)
    {
        $this->registerContainerBuilder();
        $this->registerExtensionLoader();

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }

    /**
     * Adds Symfony ContainerBuilder to OXID registry
     */
    private function registerContainerBuilder()
    {
        oxRegistry::set('container', new ContainerBuilder());
    }

    private function registerExtensionLoader()
    {
        $extensionLoader = new ExtensionLoader();
        $extensionLoader->setContainer($this->getContainer());

        $this->getContainer()->set('as.extension_loader', $extensionLoader);
    }
}
