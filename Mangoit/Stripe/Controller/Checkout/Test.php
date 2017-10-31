<?php
/**
 * Created by PhpStorm.
 * User: Mangoit
 * Date: 27/05/2017
 * Time: 16:01
 */

namespace Mangoit\Stripe\Controller\Checkout;

use Mangoit\Stripe\Helper\Constant;
use Magento\Framework\App\Action\Context;
use Magento\Checkout\Model\Session as CheckoutSession;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $helper;
    protected $cron;

    public function __construct(
        Context $context,
        \Mangoit\Stripe\Helper\SubscriptionHelper $subscriptionHelper,
        \Mangoit\Stripe\Helper\Data $stripeHelper,
        \Mangoit\Stripe\Model\Cron $cron
    ) {
        $this->cron = $cron;
        parent::__construct($context);
        $this->helper = $subscriptionHelper;
        $this->stripeHelper = $stripeHelper;
    }

    public function execute()
    {
        try {
            $this->cron->syncEveryTwoMins();
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
