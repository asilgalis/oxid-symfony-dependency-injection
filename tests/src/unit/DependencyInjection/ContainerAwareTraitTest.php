<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use ASilgalis\SymfonyDi\DependencyInjection\ContainerAwareTrait;

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
        $trait = $this->getMockBuilder(ContainerAwareTrait::class)
            ->getMockForTrait();

        return $trait;
    }
}
