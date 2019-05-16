<?php


class ThisWillBeBugLaterOn
{


    /**
     * ThisWillBeBugLaterOn constructor.
     */
    public function __construct() {
    }

    public function dummyFunction()
    {
        $varone = '3';

        return $varone;
    }

    public function newFunction()
    {
        $varone = '1';

        return $varone;
    }
}