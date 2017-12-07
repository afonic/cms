<?php

namespace Statamic\API;

use Illuminate\Support\Facades\Facade;

class URL extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Endpoint\URL::class;
    }
}
