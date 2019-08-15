<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(0,300);
        $randomNumber += 100;
        $randomNumber -= rand(0, 1);
        return $randomNumber;
    }
}
