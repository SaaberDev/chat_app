<?php

namespace App\Http\Controllers;

use App\Events\Demo;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function send()
    {
        //event(new Demo("Hello"));
        return view('test.test');
    }
}
