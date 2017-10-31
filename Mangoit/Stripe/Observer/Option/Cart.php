<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 24/05/2016
 * Time: 15:44
 */

namespace Mangoit\Stripe\Observer\Option;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Cart implements ObserverInterface
{
    protected $_logger;

    public function __construct(
        LoggerInterface $loggerInterface
    ) {
        $this->_logger = $loggerInterface;
    }

    public function execute(Observer $observer)
    {
        $item = $observer->getEvent()->getQuoteItem();
        $buyInfo = $item->getBuyRequest();

        if ($options = $buyInfo->getAdditionalOptions()) {
            $additionalOptions = [];
            foreach ($options as $key => $value) {
                if ($value) {
                    $additionalOptions[] = array(
                        'label' => $key,
                        'value' => $value
                    );
                }
            }

            $item->addOption(array(
                'code' => 'additional_options',
                'value' => serialize($additionalOptions)
            ));
        }
    }
}
