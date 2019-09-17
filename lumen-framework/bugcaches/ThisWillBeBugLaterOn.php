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
        $vartwo = '5';

        return $varone . $vartwo;
    }

    public function newFunction()
    {
        $varone = '1';

        $vartwo = '5';
        return $varone . $vartwo;
    }
}
