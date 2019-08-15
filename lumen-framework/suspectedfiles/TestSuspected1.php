<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $doubleNumber = rand(0.0, 0.500);
        $randomNumber = rand(0,300);
        $randomNumber += 100;
        $randomNumber -= rand(0, 1);
        return $randomNumber + $doubleNumber;
    }
}
