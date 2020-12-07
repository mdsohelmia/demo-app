<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

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

Artisan::command('inspire', function () {
//    copy(__DIR__ . '/../stubs/Example.php', base_path('example.php'));
//    $environment = file_get_contents(base_path('.env'));
//    $environment = str_replace('DB_HOST=127.0.0.1', 'DB_HOST=mysql', $environment);
//    file_put_contents(base_path('.env'), $environment);

    Artisan::call('migrate');
    dd(Artisan::output());


})->purpose('Display an inspiring quote');
