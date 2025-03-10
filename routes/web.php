<?php

use Livewire\Volt\Volt;


Volt::route('/', 'pages.home')->name('home');
Volt::route('/home', 'pages.home')->name('home');
