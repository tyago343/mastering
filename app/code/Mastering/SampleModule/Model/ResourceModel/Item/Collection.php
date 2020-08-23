<?php

namespace Mastering\SampleModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractColection
{
    protected $_idFieldName = "id";

    protected function __contruct()
    {
        $this->__init(
            Item::class,
            ItemResource::class
        );
    }
}
