<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use ASilgalis\SymfonyDi\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContainerAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testSetContainer()
    {
        $containerMock = $this->createContainerMock();

        $trait = $this->createContainerAwareTrait();
        $trait->setContainer($containerMock);

        $this->assertSame($containerMock, $trait->getContainer());
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

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ContainerInterface
     */
    private function createContainerMock()
    {
        $mock = $this->getMockBuilder(ContainerInterface::class)
            ->getMockForAbstractClass();

        return $mock;
    }
}
