<?php

/**
 * @codeCoverageIgnore
 */
class AsSymfonyDiShopControl extends AsSymfonyDiShopControl_parent
{
    /**
     * {@inheritdoc}
     */
    public function start($sClass = null, $sFunction = null, $aParams = null, $aViewsChain = null)
    {
        $this->registerContainerBuilder();

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }

    /**
     * Adds Symfony ContainerBuilder to OXID registry
     */
    private function registerContainerBuilder()
    {
        oxRegistry::set('container', new \Symfony\Component\DependencyInjection\ContainerBuilder());
    }
}
