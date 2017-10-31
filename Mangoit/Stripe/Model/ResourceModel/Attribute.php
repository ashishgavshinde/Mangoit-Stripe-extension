<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 19/05/2016
 * Time: 21:26
 */

namespace Mangoit\Stripe\Model\ResourceModel;

class Attribute extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('Mangoit_stripe_product_attribute', 'id');
    }
}
