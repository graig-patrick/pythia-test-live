<?php


class TestSuspected1
{

    /**
     * TestSuspected1 constructor.
     */
    public function __construct() { }

    public function getRandomNumber()
    {
        $randomNumber = rand(0,1250);
        return $randomNumber;
    }
}
