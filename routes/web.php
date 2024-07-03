<?php

use App\Livewire\Contacts;
use App\Livewire\Events;
use App\Livewire\GreetingsPage;
use App\Livewire\Index;
use App\Livewire\Lifestyle;
use App\Livewire\Music;
use App\Livewire\News;
use App\Livewire\NewsDetailsPage;
use App\Livewire\Soon;
use App\Livewire\StorePage;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');
Route::get('/lifestyle', Lifestyle::class)->name('lifestyle');
Route::get('/news', News::class)->name('news');
Route::get('/events', Events::class)->name('events');
Route::get('/music', Music::class)->name('music');
Route::get('/soon', Soon::class)->name('soon');
Route::get('/store', StorePage::class)->name('store');
Route::get('/pozdrav', GreetingsPage::class)->name('pozdrav');
Route::get('/contacts', Contacts::class)->name('contacts');
Route::get('/news/{news:slug}', NewsDetailsPage::class)->name('news');
