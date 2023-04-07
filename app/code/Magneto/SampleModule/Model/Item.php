<?php

namespace Magneto\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Magneto\SampleModule\Model\ResourceModel\Item::class);
    }
}