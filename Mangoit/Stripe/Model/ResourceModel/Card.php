<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 17/05/2016
 * Time: 15:12
 */

namespace Mangoit\Stripe\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Card extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Mangoit_stripe_card', 'id');
    }
}
