<?php

namespace Abruno\TodoList;

use Illuminate\Support\Facades\Facade;

/**
 * @method static multiply( int $n1, int $n2 )
 */
class SomeOtherServiceFacade extends Facade {

    protected static function getFacadeAccessor() {
        return SomeOtherServiceContract::class;
    }

}
