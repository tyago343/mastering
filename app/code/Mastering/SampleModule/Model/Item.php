<?php
namespace Mastering\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function __construct()
    {
        $this->__init(\Mastering\SampleModule\Model\ResourceModel\Itemm::class);
    }
}
