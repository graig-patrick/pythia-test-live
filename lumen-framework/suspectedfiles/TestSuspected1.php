<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(0,3500);
        $randomNumber += 105;
        $randomNumber -= rand(0, 5);
        return $randomNumber;
    }
}
