<?php

namespace ASilgalis\SymfonyDi\Tests\Unit\DependencyInjection;

use ASilgalis\SymfonyDi\DependencyInjection\ExtensionLoader;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class ExtensionLoaderTest extends DependencyInjectionTestCase
{
    public function testSetContainer()
    {
        $extensionMock = $this->createExtensionMock(['getAlias']);
        $extensionMock->expects($this->once())->method('getAlias')->willReturn('test_alias');

        $containerBuilderMock = $this->createContainerBuilderMock([
            'registerExtension',
            'loadFromExtension',
            'compile'
        ]);
        $containerBuilderMock->expects($this->once())->method('registerExtension')->with($extensionMock);
        $containerBuilderMock->expects($this->once())->method('loadFromExtension')->with('test_alias');
        $containerBuilderMock->expects($this->once())->method('compile');

        $extensionLoader = $this->createExtensionLoader();
        $extensionLoader->setContainer($containerBuilderMock);

        $extensionLoader->load($extensionMock);
    }

    /**
     * @return ExtensionLoader
     */
    private function createExtensionLoader()
    {
        $loader = new ExtensionLoader();

        return $loader;
    }

    /**
     * @param array $methods
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|ExtensionInterface
     */
    private function createExtensionMock($methods = [])
    {
        $mock = $this->getMockBuilder(ExtensionInterface::class)
            ->setMethods($methods)
            ->getMockForAbstractClass();

        return $mock;
    }
}
