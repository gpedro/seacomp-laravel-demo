<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('time', function () {
    $now = \Carbon\Carbon::now()->format('d/m/Y H:i:s');
    $this->comment('IIIIIITS TIIIIME! ' . $now);
})->describe('Display current time on env');
