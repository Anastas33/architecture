<?php


class CircleArea implements ICircle
{
    /**
     * @var CircleAreaLib
     */
    private $circleAreaLib;
    private $circumference;

    /**
     * CircleArea constructor.
     * @param CircleAreaLib $circleAreaLib
     * @param int $circumference
     */
    public function __construct(CircleAreaLib $circleAreaLib, int $circumference)
    {
        $this->circleAreaLib = $circleAreaLib;
        $this->circumference = $circumference;
    }

    function circleArea(int $circumference)
    {
        $diagonal = $circumference / 3.14;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }

}