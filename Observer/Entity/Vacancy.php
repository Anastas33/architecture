<?php


class Vacancy implements SplSubject
{
    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * @var string
     */
    private $newVacancy;

    /**
     * Vacancy constructor.
     * @param string $newVacancy
     */
    public function __construct(string $newVacancy)
    {
        $this->observers = new SplObjectStorage();
        $this->newVacancy = $newVacancy;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return string
     */
    public function getNewVacancy()
    {
        return $this->newVacancy;
    }
}