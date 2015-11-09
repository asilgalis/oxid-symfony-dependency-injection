<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class DependencyInjectionTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|ContainerBuilder
     */
    protected function createContainerBuilderMock()
    {
        $mock = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $mock;
    }
}
