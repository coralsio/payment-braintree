<?php

namespace Corals\Modules\Payment\Braintree\Message;

use Corals\Modules\Payment\Common\Message\ResponseInterface;

/**
 * Authorize Request
 *
 * @method SubscriptionResponse send()
 */
class UpdateSubscriptionRequest extends AbstractRequest
{
    public function setSubscriptionData($value)
    {
        return $this->setParameter('subscriptionData', $value);
    }

    public function getSubscriptionData()
    {
        return $this->getParameter('subscriptionData');
    }

    public function setSubscriptionId($value)
    {
        return $this->setParameter('subscriptionId', $value);
    }

    public function getSubscriptionId()
    {
        return $this->getParameter('subscriptionId');
    }

    public function getData()
    {
        return array(
            'subscriptionData' => $this->getSubscriptionData(),
            'subscriptionId' => $this->getSubscriptionId(),
        );
    }

    /**
     * Send the request with specified data
     *
     * @param mixed $data The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $response = $this->braintree->subscription()->update($data['subscriptionId'], $data['subscriptionData']);

        return $this->response = new SubscriptionResponse($this, $response);
    }
}
