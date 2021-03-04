<?php


class User implements NotifiableInterface
{
    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $chrome;

    /**
     * User constructor.
     * @param string $phone
     * @param string $email
     * @param string $chrome
     */
    public function __construct(string $phone, string $email, string $chrome)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->chrome = $chrome;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getChrome(): string
    {
        return $this->chrome;
    }


}