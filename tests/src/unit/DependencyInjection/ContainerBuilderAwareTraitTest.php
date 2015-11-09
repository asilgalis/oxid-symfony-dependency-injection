<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use ASilgalis\SymfonyDi\DependencyInjection\ContainerBuilderAwareTrait;

class ContainerBuilderAwareTraitTest extends DependencyInjectionTestCase
{
    public function testGetContainerBuilder()
    {
        $containerBuilderMock = $this->createContainerBuilderMock();

        $trait = $this->createContainerAwareTrait();
        $trait->setContainer($containerBuilderMock);

        $this->assertSame($containerBuilderMock, $trait->getContainerBuilder());
    }

    /**
     * @return ContainerBuilderAwareTrait
     */
    private function createContainerAwareTrait()
    {
        $trait = $this->getMockBuilder(ContainerBuilderAwareTrait::class)
            ->getMockForTrait();

        return $trait;
    }
}
