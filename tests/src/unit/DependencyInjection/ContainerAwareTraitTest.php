<?php

namespace ASilgalis\OxidModule\SymfonyDi\Tests\Unit\DependencyInjection;

use ASilgalis\OxidModule\SymfonyDi\DependencyInjection\ContainerAwareTrait;

class ContainerAwareTraitTest extends DependencyInjectionTestCase
{
    public function testSetContainer()
    {
        $containerBuilderMock = $this->createContainerBuilderMock();

        $trait = $this->createContainerAwareTrait();
        $trait->setContainer($containerBuilderMock);

        $this->assertSame($containerBuilderMock, $trait->getContainer());
    }

    /**
     * @return ContainerAwareTrait
     */
    private function createContainerAwareTrait()
    {
        $trait = $this->getMockBuilder('\ASilgalis\OxidModule\SymfonyDi\DependencyInjection\ContainerAwareTrait')
            ->getMockForTrait();

        return $trait;
    }
}
