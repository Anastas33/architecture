<?php


class Notification implements NotificationInterface
{
    /**
     * @var NotificationInterface
     */
    protected $notification;

    /**
     * @var NotifiableInterface
     */
    protected $notifiable;

    /**
     * Notification constructor.
     * @param NotificationInterface $notification
     * @param NotifiableInterface $notifiable
     */
    public function __construct(NotificationInterface $notification, NotifiableInterface $notifiable)
    {
        $this->notification = $notification;
        $this->notifiable = $notifiable;
    }

    public function send(string $text): void
    {
        $this->notification->send($text);
    }
}