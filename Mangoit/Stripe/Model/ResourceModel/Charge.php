<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 15/05/2016
 * Time: 13:15
 */

namespace Mangoit\Stripe\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Charge extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Mangoit_stripe_charge', 'id');
    }
}
