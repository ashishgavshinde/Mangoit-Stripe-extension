<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 08/05/2016
 * Time: 16:08
 */

namespace Mangoit\Stripe\Model\Source;

use Magento\Payment\Model\Source\Cctype as PaymentCctype;

class Cctype extends PaymentCctype
{
    public function getAllowedTypes()
    {
        return ['VI', 'MC', 'AE', 'DI', 'OT'];
    }
}
