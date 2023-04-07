<?php

namespace Magneto\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb 
{
    protected function _construct()
    {
        $this->_init('magneto_sample_item', 'id');
    }
}
