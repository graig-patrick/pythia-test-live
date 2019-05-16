<?php


class ThisWillBeBugLaterOn
{

    public function dummyFunction()
    {
        $varone = '1';
        $vartwo = '2';

        return $varone . $vartwo;
    }
}