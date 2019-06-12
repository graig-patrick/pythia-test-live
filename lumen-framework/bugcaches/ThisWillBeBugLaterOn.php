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
        $vartwo = '4';

        return $varone . $vartwo;
    }

    public function newFunction()
    {
        $varone = '1';

        $vartwo = '3';
        return $varone . $vartwo;
    }
}