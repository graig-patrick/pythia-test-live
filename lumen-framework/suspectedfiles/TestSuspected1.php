<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(0,2500);
        $randomNumber += 100;
        $randomNumber -= rand(0, 10);
        return $randomNumber;
    }
}
