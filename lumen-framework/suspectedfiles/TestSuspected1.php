<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(0,5000);
        $randomNumber += 100;
        return $randomNumber;
    }
}
