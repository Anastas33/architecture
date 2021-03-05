<?php


interface NotificationInterface
{
    public function send(string $text): void;
}