<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(Newsletter::class, function() {
            return new MailchimpNewsletter(
                (new ApiClient())->setConfig([
                    'apiKey' => config('services.mailchimp.key'),
                    'server' => 'us21'
                ])
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Gate::define('admin', function(User $user) {

            return $user->username === 'afzal003';

        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
