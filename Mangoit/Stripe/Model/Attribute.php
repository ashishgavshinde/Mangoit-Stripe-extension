<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 19/05/2016
 * Time: 21:26
 */

namespace Mangoit\Stripe\Model;

use Mangoit\Stripe\Model\ResourceModel\Attribute as Resource;
use Mangoit\Stripe\Model\ResourceModel\Attribute\Collection as Collection;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;

class Attribute extends AbstractModel
{
    protected $_eventPrefix = 'attribute_';

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
