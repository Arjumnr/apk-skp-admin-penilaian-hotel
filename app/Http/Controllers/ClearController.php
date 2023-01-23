<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClearController extends Controller
{
    public function clearRoute()
    {
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        \Artisan::call('view:clear');
        \Artisan::call('optimize:clear');
        \Artisan::call('config:cache');
        \Artisan::call('optimize');
        \Artisan::call('route:cache');
        \Artisan::call('view:cache');
        return 'Route cache cleared!';
    }
}
