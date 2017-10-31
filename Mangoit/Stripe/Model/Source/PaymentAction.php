<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 08/05/2016
 * Time: 15:13
 */

namespace Mangoit\Stripe\Model\Source;

use Magento\Framework\Option\ArrayInterface;

class PaymentAction implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => 'authorize',
                'label' => __('Authorize Only'),
            ],
            [
                'value' => 'authorize_capture',
                'label' => __('Authorize and Capture')
            ]
        ];
    }
}
