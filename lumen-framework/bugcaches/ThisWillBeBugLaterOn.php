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
        $varone = '2';
        $vartwo = '1';

        return $varone . $vartwo;
    }

    public function newFunction()
    {
        $varone = '2';

        $vartwo = '1';
        return $varone . $vartwo;
    }
}
