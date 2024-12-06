<?php

use App\Livewire\BirdForm;
use App\Livewire\Bookmarks;
use App\Livewire\Counter;
use App\Livewire\Lazy;
use App\Livewire\SendEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bird', BirdForm::class);
Route::get('/counter', Counter::class);
Route::get('/lazy', Lazy::class)->lazy();
Route::get('/bookmarks', Bookmarks::class);
