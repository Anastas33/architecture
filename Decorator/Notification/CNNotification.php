<?php


class CNNotification extends Notification
{
    public function send(string $text): void
    {
        echo "Сообщение " . $text . " отправлено на браузер: " . $this->notifiable->getChrome();
        parent::send($text);
    }
}