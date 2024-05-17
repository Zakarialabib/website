<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Front\Articles\Browse as BrowseArticles;
use App\Livewire\Front\Articles\Create as CreateArticle;
use App\Livewire\Front\Articles\Edit as EditArticle;
use App\Livewire\Front\Articles\Show as ShowArticle;
use App\Livewire\Front\DynamicPage;

require __DIR__.'/auth.php';

// Articles
Route::get('/articles', BrowseArticles::class)->name('articles');
Route::get('article/create', CreateArticle::class)->name('article.create');
Route::get('article/{article}', ShowArticle::class)->name('articles.show');
Route::get('article/{article}/edit', EditArticle::class)->name('articles.edit');

Route::get('/{slug?}', DynamicPage::class)->name('front.dynamicPage');

Volt::route('/component/home',                                'docs.index');
Volt::route('component/alert',                  'docs.alert');
Volt::route('component/accordion',                  'docs.accordion');
Volt::route('component/badge',                 'docs.badge');
Volt::route('component/breadcrumb',                 'docs.breadcrumb');
Volt::route('component/button',                 'docs.button');
Volt::route('component/card',                   'docs.card');
Volt::route('component/carousel',                   'docs.carousel');
Volt::route('component/checkbox',               'docs.checkbox');
Volt::route('component/datepicker',             'docs.datepicker');
Volt::route('component/dropdown',               'docs.dropdown');
Volt::route('component/icon',                   'docs.icon');
Volt::route('component/input',                  'docs.input');
Volt::route('component/modal',                  'docs.modal');
Volt::route('component/radio-button',           'docs.radiobutton');
Volt::route('component/select2',                 'docs.select2');
Volt::route('component/spinner',              'docs.loading-spinner');
Volt::route('component/swiper',                 'docs.swiper');
Volt::route('component/tabs',                    'docs.tabs');
Volt::route('component/table',                  'docs.table');
Volt::route('component/textarea',               'docs.textarea');
Volt::route('component/toggle',                 'docs.toggle');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});
