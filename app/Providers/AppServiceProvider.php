<?php

namespace Olotu\Providers;

use Illuminate\Support\ServiceProvider;
use Olotu\Repositories\Utilities\MailChimp;
use Olotu\Repositories\Utilities\NewsLetter;
use Olotu\Repositories\Utilities\CommunityRepository;
use Olotu\Repositories\Utilities\EloquentCommunity;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsLetter::class, MailChimp::class);
        $this->app->bind(CommunityRepository::class, EloquentCommunity::class);
    }
}
