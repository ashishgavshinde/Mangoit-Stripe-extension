<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 26/05/2016
 * Time: 21:55
 */

namespace Mangoit\Stripe\Controller\Adminhtml\Subscription;

use Magento\Backend\App\Action;
use Mangoit\Stripe\Controller\Adminhtml\Subscription;

class Index extends Subscription
{
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend(__('Subscription Manager'));

        return $resultPage;
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Mangoit_Stripe::subscription');
    }
}
