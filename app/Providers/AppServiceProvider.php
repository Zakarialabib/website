<?php

namespace App\Providers;

use App\Enums\Status;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use App\Models\Language;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $languages = cache()->rememberForever('languages', static function () {
            return Session::has('language')
                ? Language::where('code', Session::get('language'))->get()
                : Language::where('is_default', Status::DEFAULT)->get();
        });

        $language = Language::where('is_default', true)->first();

        View::share('languages', $languages);

        View::share('language', $language);

        View::composer('*', function ($view) {
            $view->with('statuses', function () {
                return Cache::remember('statuses', 3600, function () {
                    return Status::values();
                });
            });
        });
    }
}
