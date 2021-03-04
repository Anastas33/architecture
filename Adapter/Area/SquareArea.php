<?php


class SquareArea implements ISquare
{
    /**
     * @var SquareAreaLib
     */
    private $squareAreaLib;
    private $sideSquare;

    /**
     * SquareArea constructor.
     * @param SquareAreaLib $squareAreaLib
     * @param $sideSquare
     */
    public function __construct(SquareAreaLib $squareAreaLib, int $sideSquare)
    {
        $this->squareAreaLib = $squareAreaLib;
        $this->sideSquare = $sideSquare;
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = $sideSquare * sqrt(2);
        return $this->squareAreaLib->getSquareArea($diagonal);
    }


}