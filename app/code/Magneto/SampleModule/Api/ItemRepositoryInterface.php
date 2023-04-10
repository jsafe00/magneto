<?php

namespace Magneto\SampleModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Magneto\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList();
}
