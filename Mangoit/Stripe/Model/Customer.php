<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 17/05/2016
 * Time: 15:12
 */

namespace Mangoit\Stripe\Model;

use Mangoit\Stripe\Model\ResourceModel\Customer as Resource;
use Mangoit\Stripe\Model\ResourceModel\Customer\Collection as Collection;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;

class Customer extends AbstractModel
{
    protected $_eventPrefix = 'customer_';

    public function __construct(
        Context $context,
        Registry $registry,
        Resource $resource,
        Collection $resourceCollection,
        $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
}
