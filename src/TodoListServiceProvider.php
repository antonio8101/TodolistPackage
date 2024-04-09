<?php


namespace Abruno\TodoList;

use Illuminate\Support\ServiceProvider;

class TodoListServiceProvider extends ServiceProvider {
    /**
     * Register services.
     */
    public function register(): void {

        $this->app->scoped(SomeServiceContract::class, SomeService::class);

        $this->app->scoped(SomeOtherServiceContract::class, SomeOtherServiceContractImpl::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        //
    }
}
