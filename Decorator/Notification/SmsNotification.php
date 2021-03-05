<?php


class SmsNotification extends Notification
{
    public function send(string $text): void
    {
        echo "Сообщение " . $text . " отправлено на номер телефона: " . $this->notifiable->getPhone();
        parent::send($text);
    }
}