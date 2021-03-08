<?php


interface PaymentInterface
{
    public function pay(Order $order): void;
}