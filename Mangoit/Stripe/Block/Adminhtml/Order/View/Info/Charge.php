<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 30/05/2016
 * Time: 21:45
 */

namespace Mangoit\Stripe\Block\Adminhtml\Order\View\Info;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Mangoit\Stripe\Model\ChargeFactory;
use Mangoit\Stripe\Model\SubscriptionFactory;

class Charge extends \Magento\Backend\Block\Template
{
    protected $registry;

    protected $_chargeFactory;

    protected $_subsFactory;

    public function __construct(
        Context $context,
        Registry $registry,
        ChargeFactory $chargeFactory,
        SubscriptionFactory $subscriptionFactory,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->_chargeFactory = $chargeFactory;
        $this->_subsFactory = $subscriptionFactory;
        parent::__construct($context, $data);
    }

    public function getChargeId()
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $this->registry->registry('current_order');

        /** @var \Mangoit\Stripe\Model\Charge $chargeModel */
        $chargeModel = $this->_chargeFactory->create();

        /** @var \Mangoit\Stripe\Model\Subscription $subsModel */
        $subsModel = $this->_subsFactory->create();

        $orderId = $order->getIncrementId();
        $charge = $chargeModel->getCollection()->addFieldToFilter('order_id', $orderId)->getFirstItem();
        $subs = $subsModel->getCollection()->addFieldToFilter('order_id', $orderId)->getFirstItem();

        $data = [];
        if ($charge->getId()) {
            $data = [
                'id' => $charge->getData('charge_id'),
                'type' => 'charge'
            ];
        }
        if ($subs->getId()) {
            $data = [
                'id' => $subs->getData('subscription_id'),
                'type' => 'subscription'
            ];
        }

        return $data;
    }
}
