<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 25/05/2016
 * Time: 16:49
 */

namespace Mangoit\Stripe\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Subscription extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Mangoit_stripe_subscription', 'id');
    }
}
