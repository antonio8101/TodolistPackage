<?php

namespace Abruno\TodoList;

use Illuminate\Support\Facades\Facade;

/**
 * @method static sum( int $n1, int $n2 )
 */
class SomeServiceFacade extends Facade {

    protected static function getFacadeAccessor() {
        return SomeServiceContract::class;
    }

}
