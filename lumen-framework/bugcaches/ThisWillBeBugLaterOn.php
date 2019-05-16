<?php


class ThisWillBeBugLaterOn
{

    public function dummyFunction()
    {
        $varzero = '0';
        $varone = '1';
        $vartwo = '2';
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