<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/',                                'docs.index');
Volt::route('component/alert',                  'docs.alert');
Volt::route('component/accordion',                  'docs.accordion');
Volt::route('component/badge',                 'docs.badge');
Volt::route('component/breadcrumb',                 'docs.breadcrumb');
Volt::route('component/button',                 'docs.button');
Volt::route('component/card',                   'docs.card');
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
Volt::route('component/tooltip',                'docs.tooltip');
Volt::route('component/verification-code',      'docs.verification_code');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
