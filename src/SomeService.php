<?php

namespace Abruno\TodoList;

use Illuminate\Support\Facades\Log;

class SomeService implements SomeServiceContract {

    public function sum(int $n1, int $n2): int {

        Log::info('Using the Service from the package: '. SomeService::class);

        return $n1 + $n2;
    }

}
