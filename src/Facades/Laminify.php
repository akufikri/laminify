<?php

namespace Akufikri\Laminify\Facades;

use Illuminate\Support\Facades\Facade;

class Laminify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laminify';
    }
}
