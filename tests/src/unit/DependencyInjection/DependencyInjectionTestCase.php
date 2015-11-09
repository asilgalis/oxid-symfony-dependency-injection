<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class DependencyInjectionTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $methods
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|ContainerBuilder
     */
    protected function createContainerBuilderMock($methods = [])
    {
        $mock = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->setMethods($methods)
            ->getMock();

        return $mock;
    }
}
