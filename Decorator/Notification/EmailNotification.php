<?php


class EmailNotification extends Notification
{
    public function send(string $text): void
    {
        echo "Сообщение " . $text . " отправлено на email: " . $this->notifiable->getEmail();
        parent::send($text);
    }
}