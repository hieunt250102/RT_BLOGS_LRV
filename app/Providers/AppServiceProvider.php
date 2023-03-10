<?php

namespace App\Providers;

use App\Interfaces\AuthenticationServiceInterface;
use App\Interfaces\BlogServiceInterface;
use App\Interfaces\CategoryServiceInterface;
use App\Interfaces\VerifyMailServiceInterface;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\VerificationServiceInterface;
use App\Services\AuthenticationService;
use App\Services\BlogService;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Services\VerifyMailService;
use App\Services\VerifyService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthenticationServiceInterface::class, function () {
            return new AuthenticationService();
        });

        $this->app->bind(VerifyMailServiceInterface::class, function () {
            return new VerifyMailService();
        });

        $this->app->bind(VerificationServiceInterface::class, function () {
            $userService = $this->app->make(UserService::class);
            return new VerifyService($userService);
        });

        $this->app->bind(UserServiceInterface::class, function () {
            return new UserService();
        });
        $this->app->bind(BlogServiceInterface::class, function () {
            return new BlogService();
        });
        $this->app->bind(CategoryServiceInterface::class, function () {
            return new CategoryService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(!app()->isProduction());
    }
}
