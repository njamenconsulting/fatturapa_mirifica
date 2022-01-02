<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\InvoiceRepository;
use App\Repositories\InvoiceRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            InvoiceRepositoryInterface::class, InvoiceRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
