<?php

namespace Magneto\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Magneto\SampleModule\Model\ResourceModel\Item\Collection;
use Magneto\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Magneto\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}