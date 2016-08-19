<?php

namespace Piotrpolak\ConditionalRoutingBundle\Model\RoutingDefinition;

class ControllerBundleRoutingDefinition extends AbstractBundleRoutingDefinition
{
    /**
     * ControllerBundleRoutingDefinition constructor.
     *
     * @param $bundleName
     */
    public function __construct($bundleName)
    {
        parent::__construct($bundleName, 'controller');
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        return '@' . $this->getBundleName() . '/Controller/';
    }
}