<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 26/05/2016
 * Time: 02:02
 */

namespace Mangoit\Stripe\Model\ResourceModel\Subscription;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Mangoit\Stripe\Model\Subscription', 'Mangoit\Stripe\Model\ResourceModel\Subscription');
    }
}
