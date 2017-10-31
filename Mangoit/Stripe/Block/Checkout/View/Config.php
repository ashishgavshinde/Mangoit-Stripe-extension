<?php
/**
 * Created by PhpStorm.
 * User: joel
 * Date: 13/10/2016
 * Time: 23:54
 */

namespace Mangoit\Stripe\Block\Checkout\View;

use Magento\Catalog\Block\Product\Context;
use Mangoit\Stripe\Helper\Config as ConfigHelper;

class Config extends \Magento\Framework\View\Element\Template
{
    protected $_config;

    protected $_cardFactory;

    protected $_customerSession;

    public $checkFlag = 0;

    public function __construct(
        Context $context,
        ConfigHelper $config,
        \Mangoit\Stripe\Model\CardFactory $cardFactory,
        \Magento\Customer\Model\Session $customerSession,
        array $data
    ) {
        $this->_customerSession = $customerSession;
        $this->_config = $config;
        $this->_cardFactory = $cardFactory;
        parent::__construct($context, $data);
    }

    public function getPublishableKey()
    {
        $isTest = $this->_config->getIsSandboxMode();
        if ($isTest) {
            return $this->_config->getConfigValue('test_publishable');
        } else {
            return $this->_config->getConfigValue('live_publishable');
        }
    }

    public function getConfigData()
    {
        return [
            'is_iframe_active' => $this->_config->isIframeActive()
        ];
    }

    public function getIsDebugMode()
    {
        return $this->_config->isDebugMode();
    }

    public function isSave()
    {
        return $this->_config->isSave();
    }

    public function getDataCard()
    {
        $customer_id = $this->_customerSession->getCustomerId();
        $model = $this->_cardFactory->create()
            ->getCollection()
            ->addFieldToFilter('magento_customer_id', $customer_id)->getData();
        $this->checkFlag = count($model);

        return $model;
    }

    public function getConfig()
    {
        return $this->_config;
    }

    public function getCustomerSession()
    {
        return $this->_customerSession;
    }
}
