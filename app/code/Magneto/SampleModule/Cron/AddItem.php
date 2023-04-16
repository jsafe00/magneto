<?php

namespace Magneto\SampleModule\Cron;

use Magneto\SampleModule\Model\ItemFactory;
use Magneto\SampleModule\Model\Config;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Scheduled item')
            ->save();
    }
}