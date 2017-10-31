# Mangoit Stripe Payment Gateway and Subscription

## User guide
- If you have trouble installing this extension, please visit: http://www.confluence.izysync.com/display/DOC/1.+Stripe+Payment+and+Subscriptions+Installation+Guides

- For detailed user guide of this extension, please visit: http://www.confluence.izysync.com/display/DOC/2.+Stripe+Payment+and+Subscriptions+User+Guides

- Support portal:  http://servicedesk.izysync.com/servicedesk/customer/portal/22

- All the updates of this module are included in CHANGELOG.md file.

## Installation
1. Upload the extension to your app/code/Mangoit/Stripe
2. Run bin/magento setup:upgrade to install the module
3. Run bin/magento setup:di:compile to generate dependency code
3. Run bin/magento cache:clean to clear the cache
4. Run composer require stripe/stripe-php