<?php

namespace Piotrpolak\ConditionalRoutingBundle\Tests\DependencyInjection;

use Piotrpolak\ConditionalRoutingBundle\DependencyInjection\PiotrpolakConditionalRoutingExtension;

class PiotrpolakConditionalRoutingExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $containerBuilder = $this->getMockBuilder('\Symfony\Component\DependencyInjection\ContainerBuilder')
            ->disableOriginalConstructor()
            ->getMock();
        
        $extension = new PiotrpolakConditionalRoutingExtension();
        $extension->load(array(), $containerBuilder);
    }
}
