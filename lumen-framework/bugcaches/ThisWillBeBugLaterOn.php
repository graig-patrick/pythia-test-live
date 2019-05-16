<?php


class ThisWillBeBugLaterOn
{


    /**
     * ThisWillBeBugLaterOn constructor.
     */
    public function __construct() {
        $test = 'test';
    }

    public function dummyFunction()
    {
        $varone = '3';
        $vartwo = '4';

        return $varone . $vartwo;
    }

    public function newFunction()
    {
        $varone = '1';
        $vartwo = '2';

        return $varone;
    }
}