<?php


class WebMoneyPayment implements PaymentInterface
{
    /**
     * @param Order $order
     */
    public function pay(Order $order): void
    {
        echo "Заказ на сумму " . $order->getSum() . " по номеру телефона " . $order->getUser()->getPhone() . " оплачен через WebMoney";
    }
}