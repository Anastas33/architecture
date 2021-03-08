<?php


class Order
{
    /**
     * @var float
     */
    private $sum;

    /**
     * @var ShopUser
     */
    private $user;

    /**
     * Order constructor.
     * @param float $sum
     * @param ShopUser $user
     */
    public function __construct(float $sum, ShopUser $user)
    {
        $this->sum = $sum;
        $this->user = $user;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @return ShopUser
     */
    public function getUser(): ShopUser
    {
        return $this->user;
    }

}