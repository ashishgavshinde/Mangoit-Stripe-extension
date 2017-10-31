<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 19/05/2016
 * Time: 21:27
 */

namespace Mangoit\Stripe\Model\ResourceModel\Attribute;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Mangoit\Stripe\Model\Attribute', 'Mangoit\Stripe\Model\ResourceModel\Attribute');
    }
}
