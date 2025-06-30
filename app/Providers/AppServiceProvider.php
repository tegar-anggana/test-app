<?php

namespace App\Providers;

use App\Domain\Contracts\SomeTableRepositoryInterface;
use App\Infrastructure\Persistence\SomeTableRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SomeTableRepositoryInterface::class,
            SomeTableRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
