<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 17/05/2016
 * Time: 15:13
 */

namespace Mangoit\Stripe\Model\ResourceModel\Card;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Mangoit\Stripe\Model\Card', 'Mangoit\Stripe\Model\ResourceModel\Card');
    }
}
