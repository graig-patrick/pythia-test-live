<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $doubleNumber = rand(0.0, 0.900);
        $randomNumber = rand(0,3001);
        $randomNumber += 100;
        $randomNumber -= rand(0, 3);
        return $randomNumber + $doubleNumber;
    }
}
