<?php

namespace command;
class HelloWorld
{
    /**
     * Returns 'Hello World'
     *
     * @since  0.0.1
     * @author l3n641
     */
    public function __invoke()
    {
        \WP_CLI::line('Hello World!');
    }

}

