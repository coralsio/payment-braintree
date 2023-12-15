# Corals Payment Braintree
* Braintree subscriptions Plugin is the best Laravel Plugin for handling recurring billing for Braintree. integrate Braintree seamlessly with Laravel Subscription Platform to support provide PayPal card Credit card recurring billing, You can enable it along with other subscription gateways like stripe which is already built in with Laraship Subscriptions platform or configure it as a standalone payment gateway.
* If you are a seller and want to set up preapproved payment agreements for your end users, such as recurring payments, subscriptions, automatic billing, and installment plans.you want to pay with Braintree every time you shop on a certain site, then Laraship Braintree subscription is your ultimate solution for this.

- Under  Payment Settings, you can find a Tab called Braintree Add your settings there

<p><img src="https://www.laraship.com/wp-content/uploads/2018/02/image003.png"></p>
<p>&nbsp;</p>

- Configure webooks : Please follow the instructions to set your webhook

https://articles.braintreepayments.com/control-panel/webhooks

Your Webhook URL should be

https://[you-domain.com]/webhooks/briantree

<p><img src="https://www.laraship.com/wp-content/uploads/2018/02/image005.png"></p>
<p>&nbsp;</p>

- Braintree does not support create plans through API, so plans need to be created manually.You need to create a plan on the Laraship framework and reflect in on Braintree, plan code should match the ID field inside Braintree.

<p>&nbsp;</p>
<p><img src="https://www.laraship.com/wp-content/uploads/2018/02/image007.png"></p>
<p>&nbsp;</p>

## Installation

You can install the package via composer:

```bash
composer require corals/payment-braintree
```

## Testing

```bash
vendor/bin/phpunit vendor/corals/payment-braintree/tests 
```
## Questions & Answers
If you faced any issue you can check our questions center, and you can post your question from the following link
[Questions & Answers](https://www.laraship.com/laraship-questions/)  

## Online Documentation 
follow the [Online Docs](https://www.laraship.com/docs/laraship/payment-modules/braintree-configuration/) to see more about this module 

## Hire Us
Looking for a professional team to build your success and start driving your business forward.
Laraship team ready to start with you [Hire Us](https://www.laraship.com/contact)
