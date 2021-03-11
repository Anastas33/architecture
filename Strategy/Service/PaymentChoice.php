<?php


class PaymentChoice
{
    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * PaymentChoice constructor.
     * @param PaymentInterface $payment
     */
    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    /**
     * @param PaymentInterface $payment
     */
    public function setPayment(PaymentInterface $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @param Order $order
     */
    public function doPayment(Order $order)
    {
        $this->payment->pay($order);
    }
}