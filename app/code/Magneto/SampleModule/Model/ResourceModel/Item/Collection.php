<?php 

namespace Magneto\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Mmodel\ResourceModel\Db\Collection\AbstractCollection;
use Magneto\SampleModule\Model\Item;
use Magneto\SampleModule\Mode\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    
    protected function _construct()
    {
        $this->_init(
            Item::class,
            ItemResource::class
        );
    }
}

