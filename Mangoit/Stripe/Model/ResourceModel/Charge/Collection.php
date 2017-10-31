<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 15/05/2016
 * Time: 13:16
 */

namespace Mangoit\Stripe\Model\ResourceModel\Charge;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Mangoit\Stripe\Model\Charge', 'Mangoit\Stripe\Model\ResourceModel\Charge');
    }
}
