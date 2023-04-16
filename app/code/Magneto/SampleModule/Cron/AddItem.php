<?php

namespace Magneto\SampleModule\Cron;

use Magneto\SampleModule\Model\ItemFactory;
use Magneto\SampleModule\Model\Config;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute()
    {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()
                ->setName('Scheduled item')
                ->save();
        }
    }
}