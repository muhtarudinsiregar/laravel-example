<?php

namespace App\Http\Controllers;

use App\Events\ExampleEvent;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function store()
    {
        event(new ExampleEvent());
        $monolog = \Log::getMonolog();
        dd($monolog);
    }
}
