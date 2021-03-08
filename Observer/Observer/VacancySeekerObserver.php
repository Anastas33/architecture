<?php


class VacancySeekerObserver implements SplObserver
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var float
     */
    private $experience;

    /**
     * VacancySeekerObserver constructor.
     * @param string $name
     * @param string $email
     * @param float $experience
     */
    public function __construct(string $name, string $email, float $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update(SplSubject $subject)
    {
        echo "На адрес " . $this->email . " выслано уведомление о появлении вакансии " . $subject->getNewVacancy();
    }

    public function subscribe(SplSubject $subject)
    {
        echo "Вы подписались на уведомления";
        $subject->attach($this);
    }

    public function unsubscribe(SplSubject $subject)
    {
        echo "Вы отписались от уведомлений";
        $subject->detach($this);
    }
}