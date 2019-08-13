<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(150,2500);
        $randomNumber += 50;
        $randomNumber -= rand(0, 150);
        return $randomNumber;
    }
}
