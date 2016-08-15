<?php

namespace ExamplePlugin;

use VIISON\AddressSplitter\AddressSplitter;

/**
 * Class Service
 *
 * @package PlentyConnector
 */
class Service
{
    private $splitter;

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->splitter = new AddressSplitter();
    }

    public function test()
    {
        // yay
    }
}
