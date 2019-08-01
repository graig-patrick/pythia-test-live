<?php


class TestFile16
{
    /**
     * @var string
     */
    private $someVar;

    /**
     * TestFile16 constructor.
     * @param string $someVar
     */
    public function __construct(string $someVar) {
        // fixes
        $this->someVar = $someVar;
        $this->someVar = $this->someVar . 'updated';
    }
}
