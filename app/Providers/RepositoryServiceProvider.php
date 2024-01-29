<?php

namespace App\Providers;

use App\Models\Section;
use App\Models\User;
use App\Repositories\Auth\AuthEloquentRepository;
use App\Repositories\Auth\AuthRepository;
use App\Repositories\Sections\SectionEloquentRepository;
use App\Repositories\Sections\SectionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(AuthRepository::class, function () {
            return new AuthEloquentRepository(new User());
        });

        $this->app->bind(SectionRepository::class, function () {
            return new SectionEloquentRepository(new Section());
        });
    }
}
