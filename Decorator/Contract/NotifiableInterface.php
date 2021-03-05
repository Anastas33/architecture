<?php


interface NotifiableInterface
{
    /**
     * @return string
     */
    public function getPhone(): string;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getChrome(): string;
}