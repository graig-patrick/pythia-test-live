<?php


class ThisWillBeBugLaterOn
{


    /**
     * ThisWillBeBugLaterOn constructor.
     */
    public function __construct() { }

    public function dummyFunction()
    {
        $varzero = '0';
        $varone = '3';
        $vartwo = '4';
        $varthree = '3';

        return $varone . $vartwo . $varthree;
    }

    public function newFunction()
    {
        $varone = '1';
        $vartwo = '2';

        return $varone . $vartwo;
    }
}