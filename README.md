# Corals Payment Braintree

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

## Hire Us
Looking for a professional team to build your success and start driving your business forward.
Laraship team ready to start with you [Hire Us](https://www.laraship.com/contact)
