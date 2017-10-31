/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'jquery',
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list',
        'https://js.stripe.com/v2/'
    ],
    function (
        $,
        Component,
        rendererList
    ) {
        'use strict';

        var publishableKey = window.Mangoit.stripe.publishableKey;
        Stripe.setPublishableKey(publishableKey);

        var methods = [
            {
                type: 'Mangoit_stripe',
                component: 'Mangoit_Stripe/js/view/payment/method-renderer/stripe-payments-method'
            },
            {
                type: 'Mangoit_stripe_iframe',
                component: 'Mangoit_Stripe/js/view/payment/method-renderer/stripe-payments-iframe'
            }
        ];

        $.each(methods, function (k, method) {
            rendererList.push(method);
        });
        /** Add view logic here if needed */
        return Component.extend({});
    }
);