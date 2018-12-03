<?php

namespace App\Controller;

class FooController
{
    public function __invoke()
    {
        dump('foo');
    }
}
